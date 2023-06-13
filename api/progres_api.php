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
    $id_user = mysqli_real_escape_string($koneksi, $_GET['id_user']);

    // Mengambil data dari tabel progress berdasarkan id_user
    $query = "SELECT * FROM proggres WHERE id_user = '$id_user'";
    $result = mysqli_query($koneksi, $query);

    // Menyimpan data progress yang didapatkan ke dalam array
    $progressData = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $progressData[] = $row;
    }

    // Mengembalikan data progress dalam format JSON
    $response = array(
        'status' => 'success',
        'message' => 'Data berhasil ditemukan',
        'data' => $progressData
    );

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Jika id_user tidak ada dalam data yang diterima
    $response = array(
        'status' => 'error',
        'message' => 'Parameter id_user tidak valid'
    );

    header('Content-Type: application/json');
    echo json_encode($response);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
