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
$tglPembayaranInhouse = $_POST['tgl_pembayaran_inhouse'];

// Meng-handle file gambar yang di-upload
$buktiPembayaranInhouse = $_FILES['bukti_pembayaran_inhouse'];

$targetDir = "/img/bukti_inhouse/"; // Ganti dengan direktori upload yang sesuai di server Anda
$targetFile = $targetDir . basename($buktiPembayaranInhouse["name"]);

// Memindahkan file gambar ke direktori tujuan
if (move_uploaded_file($buktiPembayaranInhouse["tmp_name"], $targetFile)) {
    // File berhasil di-upload

    // Menyimpan data ke dalam tabel pembayaran_dp
    $sql = "INSERT INTO pembayaran_inhouse (id_pembayaran_inhouse, id_pemesanan_rumah, tgl_pembayaran_inhouse, bukti_pembayaran_inhouse)
            VALUES (null, '$idPemesananRumah', '$tglPembayaranInhouse', '$targetFile')";

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
