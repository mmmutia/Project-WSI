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

// Cek apakah ada data yang diterima
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari request
    if (isset($_POST['id_pemesanan_rumah'])) {
        $id_pemesanan_rumah = $_POST['id_pemesanan_rumah'];
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Kunci "id_pemesanan_rumah" tidak ditemukan dalam permintaan'
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }

    if (isset($_POST['tgl_pembayaran_dp'])) {
        $tgl = $_POST['tgl_pembayaran_dp'];
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Kunci "tgl_pembayaran_dp" tidak ditemukan dalam permintaan'
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }

    if (isset($_FILES['bukti_pembayaran_dp']['name'])) {
        $bukti_pembayaran_dp = $_FILES['bukti_pembayaran_dp']['name'];

        // Mendapatkan path tempat upload file
        $targetDir = 'img/filedp/';
        $targetFilePath = $targetDir . basename($_FILES['bukti_pembayaran_dp']['name']);
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Upload file ke server
        if (move_uploaded_file($_FILES['bukti_pembayaran_dp']['tmp_name'], $targetFilePath)) {
            // Query untuk menambahkan data pembayaran_dp ke tabel Pembayaran_dp
            $query = "INSERT INTO Pembayaran_dp (id_pemesanan_rumah, tgl_pembayaran_dp, bukti_pembayaran_dp) VALUES ('$id_pemesanan_rumah', '$tgl', '$bukti_pembayaran_dp')";
            if (mysqli_query($koneksi, $query)) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data pembayaran_dp berhasil ditambahkan'
                );
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Gagal menambahkan data pembayaran_dp: ' . mysqli_error($koneksi)
                );
            }
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal upload file bukti_pembayaran_dp'
            );
        }
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Kunci "bukti_pembayaran_dp" tidak ditemukan dalam permintaan'
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Metode request tidak valid'
    );
}

// Mengirimkan respons dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);

// Menutup koneksi database
mysqli_close($koneksi);
?>
