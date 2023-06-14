<?php

// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'bernady';

$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

$id = $_GET['id_user'];

$sql = "SELECT simpan_cluster.*, cluster.nama_cluster, cluster.foto_cluster, cluster.harga FROM simpan_cluster LEFT JOIN cluster ON cluster.id_cluster = simpan_cluster.id_cluster WHERE id_user = $id";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $response = array();

    // Memproses setiap baris data
    while ($row = $result->fetch_assoc()) {
        $item = array(
            'id_simpan' => $row['id_simpan'],
            'id_cluster' => $row['id_cluster'],
            'fotocluster' => $row['foto_cluster'],
            'harga' => $row['harga'],
            'namacluster' => $row['nama_cluster']
        );

        // Menambahkan $item ke dalam $response
        $response[] = $item;
    }

    // Mengubah response menjadi format JSON
    echo json_encode($response);
} else {
    echo "Data tidak ditemukan.";
}


// if (isset($_GET['id_user'])) {
//     $id_user = mysqli_real_escape_string($koneksi, $_GET['id_user']);

//     // Mengambil data dari tabel simpan_cluster berdasarkan id_user
//     $query = "SELECT simpan_cluster.*, nama_cluster, foto_cluster, harga FROM simpan_cluster LEFT JOIN cluster ON cluster.id_cluster = simpan_cluster.id_cluster WHERE id_user = ?";
//     $statement = mysqli_prepare($koneksi, $query);
//     mysqli_stmt_bind_param($statement, 's', $id_user);
//     mysqli_stmt_execute($statement);
//     $result = mysqli_stmt_get_result($statement);

//     // Menyimpan data simpan_cluster yang didapatkan ke dalam array
//     $simpanClusters = array();
//     while ($row = mysqli_fetch_assoc($result)) {
//         $simpanClusters[] = $row;
//     }

//     // Mengembalikan data simpan_cluster dalam format JSON
//     header('Content-Type: application/json');
//     echo json_encode($simpanClusters);
// } else {
//     // Jika id_user tidak ada dalam data yang diterima
//     $response = array(
//         'status' => 'error',
//         'message' => 'Parameter id_user tidak valid'
//     );

//     header('Content-Type: application/json');
//     echo json_encode($response);
// }

// Menutup koneksi database
mysqli_close($koneksi);
?>
