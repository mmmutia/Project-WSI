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

if (isset($_GET['id_pemesanan_rumah'])) {
    $id_pemesanan_rumah = mysqli_real_escape_string($koneksi, $_GET['id_pemesanan_rumah']);

    // Mengambil data dari tabel detail_pemesanan berdasarkan id_pemesanan_rumah
    $query = "SELECT * FROM detail_pemesanan WHERE id_pemesanan_rumah = '$id_pemesanan_rumah'";
    $result = mysqli_query($koneksi, $query);

    // Menyimpan data detail_pemesanan yang didapatkan ke dalam array
    $detailPemesanan = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $detailPemesanan[] = $row;
    }

    // Mengembalikan data detail_pemesanan dalam format JSON
    $response = array(
        'status' => 'success',
        'message' => 'Data berhasil ditemukan',
        'data' => $detailPemesanan
    );

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Jika id_pemesanan_rumah tidak ada dalam data yang diterima
    $response = array(
        'status' => 'error',
        'message' => 'Parameter id_pemesanan_rumah tidak valid'
    );

    header('Content-Type: application/json');
    echo json_encode($response);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
