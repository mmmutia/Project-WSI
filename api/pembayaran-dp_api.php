<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bernady";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Mendapatkan data dari request POST
$idPemesananRumah = $_POST['id_pemesanan_rumah'];
$tglPembayaranDp = $_POST['tgl_pembayaran_dp'];

// Meng-handle file gambar yang di-upload
$buktiPembayaranDp = $_FILES['bukti_pembayaran_dp'];

$targetDir = "img/filedp/"; // Ganti dengan direktori upload yang sesuai di server Anda
$targetFile = $targetDir . basename($buktiPembayaranDp["name"]);

// Memindahkan file gambar ke direktori tujuan
if (move_uploaded_file($buktiPembayaranDp["tmp_name"], $targetFile)) {
    // File berhasil di-upload

    // Menyimpan data ke dalam tabel pembayaran_dp
    $sql = "INSERT INTO pembayaran_dp (id_pembayaran_dp, id_pemesanan_rumah, tgl_pembayaran_dp, bukti_pembayaran_dp)
            VALUES (null, '$idPemesananRumah', '$tglPembayaranDp', '$targetFile')";

    if ($conn->query($sql) === TRUE) {
        // Data berhasil disimpan
        echo "Data berhasil disimpan";
    } else {
        // Gagal menyimpan data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Gagal meng-upload file
    echo "Error uploading file";
}

$conn->close();
?>
