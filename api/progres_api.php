<?php

// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'bernady';

$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    $response = array(
        'status' => 'error',
        'message' => 'Gagal terhubung ke MySQL: ' . mysqli_connect_error()
    );

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}
$id = $_GET['id_user'];

$sql = "SELECT proggres.*, pemesanan_rumah.id_pemesanan_rumah, pemesanan_rumah.nama_pemesan FROM proggres LEFT JOIN pemesanan_rumah ON pemesanan_rumah.id_pemesanan_rumah = proggres.id_pemesanan WHERE pemesanan_rumah.id_user = '$id'";  // Ganti "nama_tabel" dengan nama tabel Anda
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // $response = array();

    // Memproses setiap baris data
    while ($row = $result->fetch_assoc()) {
        $item ["data"][]= array(
            'id_pemesanan' => $row['id_pemesanan'],
            'status' => $row['status'],
            'keterangan' => $row['keterangan'],
            'foto' => $row['foto'],
            'tanggal' => $row['tanggal'],
            'nama_pemesan' => $row['nama_pemesan']
        );
    }

    // Mengubah response menjadi format JSON
    echo json_encode($item);
} else {
    echo "Data tidak ditemukan.";
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
