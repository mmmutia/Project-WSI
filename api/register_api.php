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

// Meng-handle proses register
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // User berhasil ditambahkan, kirim respons berhasil ke aplikasi Android
        echo "success";
    } else {
        // User gagal ditambahkan, kirim respons gagal ke aplikasi Android
        echo "failed";
    }
}

$conn->close();

?>
