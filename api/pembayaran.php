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

$id = $_GET['id_user'];

$sql = "SELECT pemesanan_rumah.*, cluster.nama_cluster FROM pemesanan_rumah LEFT JOIN cluster ON cluster.id_cluster = pemesanan_rumah.id_cluster WHERE id_user = $id";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $response = array();

    // Memproses setiap baris data
    while ($row = $result->fetch_assoc()) {
        $response["data"][] = array(
            'id_pemesanan_rumah' => $row['id_pemesanan_rumah'],
            'id_cluster' => $row['id_cluster'],
            'nama_cluster' => $row['nama_cluster']
        );
    }
    // Mengubah response menjadi format JSON
    echo json_encode($response);
} else {
    echo "Data tidak ditemukan.";
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
