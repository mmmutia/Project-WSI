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

// Menangani permintaan POST dari aplikasi Android untuk menambahkan produk favorit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Memeriksa apakah semua data yang diperlukan ada dalam permintaan
    if (isset($_POST['user_id']) && isset($_POST['id_pemesanan'])) {
        $userId = $_POST['user_id'];
        $productId = $_POST['id_pemesanan'];
        
        // Memeriksa apakah produk sudah ada di daftar favorit pengguna
        $checkQuery = "SELECT * FROM progres WHERE user_id = '$userId' AND id_pemesanan = '$productId'";
        $checkResult = $conn->query($checkQuery);
        
        if ($checkResult->num_rows > 0) {
            // Produk sudah ada di daftar favorit pengguna
            $response = array(
                'status' => 'error',
                'message' => 'Product already exists in favorites list.'
            );
        } else {
            // Menambahkan produk ke daftar favorit pengguna
            $insertQuery = "INSERT INTO progres (id, id_pemesanan, id_user, status, keterangan, foto, tanggal) VALUES ('id', 'id_pemesanan', 'id_user', 'status', 'keterangan', 'foto', 'tanggal')";
            
            if ($conn->query($insertQuery) === TRUE) {
                // Produk berhasil ditambahkan ke daftar favorit pengguna
                $response = array(
                    'status' => 'success',
                    'message' => 'Product added to favorites successfully.'
                );
            } else {
                // Gagal menambahkan produk ke daftar favorit pengguna
                $response = array(
                    'status' => 'error',
                    'message' => 'Failed to add product to favorites.'
                );
            }
        }
    } else {
        // Data tidak lengkap dalam permintaan
        $response = array(
            'status' => 'error',
            'message' => 'Incomplete request data.'
        );
    }
}

// Menangani permintaan GET dari aplikasi Android untuk mendapatkan daftar produk favorit
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Memeriksa apakah user_id ada dalam permintaan
    if (isset($_GET['user_id'])) {
        $userId = $_GET['user_id'];
        
        // Mengambil daftar produk favorit pengguna
        $selectQuery = "SELECT * FROM progres WHERE user_id = '$userId'";
        $result = $conn->query($selectQuery);
        
        if ($result->num_rows > 0) {
            // Menghasilkan daftar produk favorit
            $fot = array();
            while ($row = $result->fetch_assoc()) {
                $progres[] = $row['id_pemesanan'];
            }
            
            $response = array(
                'status' => 'success',
                'progres' => $keterangan
            );
        } else {
            // Tidak ada produk favorit yang ditemukan
            $response = array(
                'status' => 'success',
                'progres' => array()
            );
        }
    } else {
        // Data tidak lengkap dalam permintaan
        $response = array(
            'status' => 'error',
            'message' => 'Incomplete request data.'
            );
        }
    }

    // Mengirimkan respons JSON ke aplikasi Android
    header('Content-Type: application/json');
    echo json_encode($response);

    //menutup koneksi ke database
    $conn->close();
?>
