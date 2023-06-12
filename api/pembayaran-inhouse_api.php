<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bernady";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menangani permintaan POST dari aplikasi Android
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Memeriksa apakah semua data pemesanan ada dalam permintaan
    if (
        isset($_POST['id_pembayaran_inhouse']) && isset($_POST['id_pemesanan']) && isset($_POST['tgl']) &&
        isset($_POST['buktiinhouse']) && isset($_POST['statusinhouse']) && isset($_FILES['gambar']) 
    ) {
        // Mendapatkan data pemesanan dari permintaan
        $id_pembayaran = $_POST['id_pembayaran_inhouse'];
        $id_pemesanan = $_POST['id_pemesanan'];
        $tgl = $_POST['tgl'];
        $buktiinhouse = $_POST['buktiinhouse'];
        $statusinhouse= $_POST['statusinhouse'];
        
        
        
        // Mengunggah gambar ke direktori tujuan
        $uploadDir = 'img/filepemesanan/';
        // Memeriksa apakah direktori tujuan sudah ada
        if (!is_dir($uploadDir)) {
            // Jika belum ada, buat direktori
            mkdir($uploadDir, 0755, true);
        }
        $uploadedFile = $_FILES['gambar']['tmp_name'];
        $fileName = $_FILES['gambar']['name'];
        $destination = $uploadDir . $fileName;
        
        if (move_uploaded_file($uploadedFile, $destination)) {
            // Gambar berhasil diunggah, lanjutkan dengan penyimpanan data pemesanan ke database
            $sql = "INSERT INTO pembayaran_inhouse (id_pembayaran_inhouse, id_pemesanan_rumah, tgl_pembayaran_inhouse, bukti_pembayaran_inhouse, status_inhouse) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssisssssi", $id_pembayaran, $id_pemesanan, $tgl, $buktiinhouse, $statusinhouse, $tgl);
            $stmt->execute();
            $stmt->close();

            // Pemesanan berhasil disimpan ke database
            $response = array(
                'status' => 'success',
                'message' => 'Order placed successfully.'
            );
        } else {
            // Gagal mengunggah gambar
            $response = array(
                'status' => 'error',
                'message' => 'Failed to upload image.'
            );
        }
    } else {
        // Data tidak lengkap dalam permintaan
        $response = array(
            'status' => 'error',
            'message' => 'Incomplete request data.'
        );
    }
} else {
    // Metode HTTP yang tidak valid
    $response = array(
        'status' => 'error',
        'message' => 'Invalid request method.'
    );
}

// Mengirimkan respons JSON ke aplikasi Android
header('Content-Type: application/json');
echo json_encode($response);

// Menutup koneksi ke database
$conn->close();
?>