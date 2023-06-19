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
        $response["data"][] = array(
            'id_simpan' => $row['id_simpan'],
            'id_cluster' => $row['id_cluster'],
            'fotocluster' => $row['foto_cluster'],
            'harga' => $row['harga'],
            'namacluster' => $row['nama_cluster']
        );
    }
    // Mengubah response menjadi format JSON
    echo json_encode($response);
} else {
    echo "Data tidak ditemukan.";
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
