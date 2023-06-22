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
$buktiinhouse = $_FILES['bukti_pembayaran_inhouse'];

// Mengunggah gambar ke direktori tujuan
$uploadDir = '../img/bukti_inhouse/';
// Memeriksa apakah direktori tujuan sudah ada
if (!is_dir($uploadDir)) {
    // Jika belum ada, buat direktori
    mkdir($uploadDir, 0755, true);
}
$uploadedFile = $_FILES['bukti_pembayaran_inhouse']['tmp_name'];
$fileName = explode(".", $_FILES['bukti_pembayaran_inhouse']['name'])[0];
$fileName = $fileName."-".date('ymdHis').".jpg";
$destination = $uploadDir . $fileName;

// Memindahkan file gambar ke direktori tujuan
if (move_uploaded_file($uploadedFile, $destination)) {
    // File berhasil di-upload

    // Menyimpan data ke dalam tabel pembayaran_dp
    $sql = "INSERT INTO pembayaran_inhouse (id_pembayaran_inhouse, id_pemesanan_rumah, tgl_pembayaran_inhouse, bukti_pembayaran_inhouse)
            VALUES (null, '$idPemesananRumah', '$tglPembayaranInhouse', '$fileName')";

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
