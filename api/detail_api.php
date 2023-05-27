<?php

// Koneksi ke database MySQL
$servername = "localhost";  // Ganti dengan alamat server MySQL Anda
$username = "root";  // Ganti dengan username MySQL Anda
$password = "";  // Ganti dengan password MySQL Anda
$database = "bernady";  // Ganti dengan nama database MySQL Anda

$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari database
$sql = "SELECT * FROM spesifikasi_teknis";  // Ganti "nama_tabel" dengan nama tabel Anda
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response = array();

    // Memproses setiap baris data
    while ($row = $result->fetch_assoc()) {
        $item = array(
            'id' => $row['id_spesifikasi'],
            'pondasi' => $row['pondasi'],
            'dinding' => $row['dinding'],
            'rangkaatap' => $row['rangka_atap'],
            'kusen' => $row['kusen'],
            'plafond' => $row['plafond'],
            'air' => $row['air'],
            'listrik' => $row['listrik'],
            'jumlahkamar' => $row['jumlah_kamar'],
            'luastanah' => $row['luas_tanah']
            // Tambahkan kolom-kolom data lainnya sesuai kebutuhan Anda
        );

        // Menambahkan item ke dalam response
        array_push($response, $item);
    }

    // Mengubah response menjadi format JSON
    echo json_encode($response);
} else {
    echo "Data tidak ditemukan.";
}

// Menutup koneksi ke database
$conn->close();

?>
