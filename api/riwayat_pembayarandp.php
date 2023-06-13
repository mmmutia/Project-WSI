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

if (isset($_GET['id_pembayaran_dp'])) {
    $id_pembayaran_dp = $_GET['id_pembayaran_dp'];

    // Query untuk mengambil data pembayaran_dp berdasarkan id_pembayaran_dp
    $query = "SELECT * FROM pembayaran_dp WHERE id_pembayaran_dp = '$id_pembayaran_dp'";
    $result = mysqli_query($koneksi, $query);

    // Menyimpan data pembayaran_dp yang didapatkan ke dalam array
    $pembayaranDp = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $pembayaranDp[] = $row;
    }

    // Mengembalikan data pembayaran_dp dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($pembayaranDp);
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
