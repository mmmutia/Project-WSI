<?php
// Koneksi ke database MySQL
$host = "localhost"; // Ganti dengan host MySQL Anda
$db = "bernady"; // Ganti dengan nama database Anda
$user = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda

// Buat koneksi ke database
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil parameter yang dikirim melalui GET atau POST
$id = $_GET['id_user'];

// Ambil data user_detail dari tabel
$query = "SELECT user_email as email, user_fullname as name FROM user_detail WHERE id_user = '$id'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Ubah data menjadi format JSON dan kirimkan sebagai respon
    header('Content-Type: application/json');
    echo json_encode($row);
} else {
    // Tidak ada data ditemukan
    echo "Tidak ada data user_detail yang ditemukan.";
}

// Tutup koneksi ke database
$conn->close();
?>