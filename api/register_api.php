<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bernady";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil parameter POST dari request
$name = $_POST["txt_nama"];
$email = $_POST["txt_email"];
$password = $_POST["txt_pass"];

// Hash password menggunakan fungsi password_hash
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query untuk insert data user ke tabel "users"
$sql = "INSERT INTO user_detail (name, user_email, password) VALUES ('$name', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    // Jika insert berhasil, kirim response OK dengan kode 200
    http_response_code(200);
} else {
    // Jika insert gagal, kirim response error dengan kode 500
    http_response_code(500);
}

$conn->close();
?>
