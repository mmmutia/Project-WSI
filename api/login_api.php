<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Meng-handle proses login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User ditemukan, kirim respons berhasil ke aplikasi Android
        echo "success";
    } else {
        // User tidak ditemukan, kirim respons gagal ke aplikasi Android
        echo "failed";
    }
}

$conn->close();

?>
