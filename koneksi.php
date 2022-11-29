<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "user";
$koneksi    = mysqli_connect($server, $username, $password, $db);
//pastikan urutan pemanggilan variabel nya sama.

//untuk cek jika konekasi gagal ke database
if (mysqli_connect_error()) {
    echo "Koneksi gagal : ".mysqli_connect_error();
}
?>