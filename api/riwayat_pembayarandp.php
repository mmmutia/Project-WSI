<?php

// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'bernady';

$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    $response = array(
        'status' => 'error',
        'message' => 'Gagal terhubung ke MySQL: ' . mysqli_connect_error()
    );

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

if (isset($_GET['id_user'])) {
    $id = $_GET['id_user'];

    // Query untuk mengambil data pembayaran_dp berdasarkan id_pembayaran_dp
    $query = "SELECT pembayaran_dp.id_pembayaran_dp, pemesanan_rumah.id_cluster, pemesanan_rumah.nama_pemesan, cluster.nama_cluster, pembayaran_dp.status_dp, pembayaran_dp.tgl_pembayaran_dp, pembayaran_dp.bukti_pembayaran_dp FROM pembayaran_dp LEFT JOIN pemesanan_rumah ON pembayaran_dp.id_pemesanan_rumah = pemesanan_rumah.id_pemesanan_rumah LEFT JOIN cluster ON pemesanan_rumah.id_cluster = cluster.id_cluster WHERE pemesanan_rumah.id_user = $id";
    $result = mysqli_query($koneksi, $query);

    // Menyimpan data pembayaran_dp yang didapatkan ke dalam array
    if ($result->num_rows > 0) {
        $response = array();
    
        // Memproses setiap baris data
        while ($row = $result->fetch_assoc()) {
            $response["data"][] = array(
                'id_pembayaran' => $row['id_pembayaran_dp'],
                'id_cluster' => $row['id_cluster'],
                'nama_pemesan' => $row['nama_pemesan'],
                'nama_cluster' => $row['nama_cluster'],
                'status' => $row['status_dp'],
                'tgl' => $row['tgl_pembayaran_dp'],
                'bukti' => $row['bukti_pembayaran_dp']
            );
        }
        // Mengubah response menjadi format JSON
        echo json_encode($response);
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    // Jika id_pembayaran_dp tidak ada dalam data yang diterima
    $response = array(
        'status' => 'error',
        'message' => 'Parameter id_pembayaran_dp tidak valid'
    );

    header('Content-Type: application/json');
    echo json_encode($response);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
