<?php

// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'bernady';

$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

// Mendapatkan data yang dikirim dari aplikasi
$data = json_decode(file_get_contents('php://input'), true);
$id_user = $data['id_user'];
$id_cluster = $data['id_cluster'];

// Cek apakah cluster sudah disimpan oleh pengguna
$query = "SELECT * FROM simpan_cluster WHERE id_user = $id_user AND id_cluster = $id_cluster";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    // Cluster sudah disimpan oleh pengguna
    $response = array(
        'status' => 'error',
        'message' => 'Cluster sudah disimpan'
    );
} else {
    // Simpan cluster ke database
    $query = "INSERT INTO simpan_cluster (id_user, id_cluster) VALUES ($id_user, $id_cluster)";
    if (mysqli_query($koneksi, $query)) {
        $response = array(
            'status' => 'success',
            'message' => 'Cluster berhasil disimpan'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Gagal menyimpan cluster'
        );
    }
}

// Mengembalikan response dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);

// Menutup koneksi database
mysqli_close($koneksi);
?>
