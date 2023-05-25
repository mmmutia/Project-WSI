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
        isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['telp']) &&
        isset($_POST['cluster']) && isset($_POST['pembayaran']) && isset($_POST['tgl']) && ($_POST['cicilandp']) && ($_POST['cicilaninhouse']) &&
        isset($_FILES['gambar'])
    ) {
        // Mendapatkan data pemesanan dari permintaan
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $cluster = $_POST['cluster'];
        $pembayaran = $_POST['pembayaran'];
        $tgl = $_POST['tgl'];
        $cicilandp = $_POST['cicialandp'];
        $cicilaninhouse = $_POST['cicilaninhouse'];
        
        // Mengunggah gambar ke direktori tujuan
        $uploadDir = 'path/to/destination/directory/';
        $uploadedFile = $_FILES['gambar']['tmp_name'];
        $fileName = $_FILES['gambar']['name'];
        $destination = $uploadDir . $fileName;
        
        if (move_uploaded_file($uploadedFile, $destination)) {
            // Gambar berhasil diunggah, lanjutkan dengan penyimpanan data pemesanan ke database
            $sql = "INSERT INTO pemesanan (nama_pemesan, alamat, no_telp_pemesan, id_cluster, tgl_pemesanan, fotocopy_ktp,jenis_pembayaran, jml_cicilan_dp, jml_cicilan_inhouse) VALUES ('$nama', '$alamat', '$telp', '$cluster', '$pembayaran', '$tgl', '$cicilandp', '$cicilaninhouse','$destination')";
            
            if ($conn->query($sql) === TRUE) {
                // Pemesanan berhasil disimpan ke database
                $response = array(
                    'status' => 'success',
                    'message' => 'Order placed successfully.'
                );
            } else {
                // Gagal menyimpan pemesanan ke database
                $response = array(
                    'status' => 'error',
                    'message' => 'Failed to place order.'
                );
            }
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
