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

if (isset($_GET['id_user'])) {
    $id = $_GET['id_user'];

    // Query untuk mengambil data pembayaran_dp berdasarkan id_pembayaran_dp
    $query = "SELECT * FROM pemesanan_rumah LEFT JOIN serah_terima on serah_terima.id_pemesanan_rumah = pemesanan_rumah.id_pemesanan_rumah LEFT JOIN detail_pemesanan on pemesanan_rumah.id_pemesanan_rumah = detail_pemesanan.id_pemesanan_rumah LEFT JOIN cluster on cluster.id_cluster = pemesanan_rumah.id_cluster WHERE pemesanan_rumah.id_user = '$id'";
    $result = mysqli_query($koneksi, $query);

    // Menyimpan data pembayaran_dp yang didapatkan ke dalam array
    if ($result->num_rows > 0) {
        $response = array();
    
        // Memproses setiap baris data
        while ($row = $result->fetch_assoc()) {
            $response["data"][] = array(
                'nama_pemesan' => $row['nama_pemesan'],
                'alamat' => $row['alamat'],
                'telp' => $row['no_telp_pemesan'],
                'nama_cluster' => $row['nama_cluster'],
                'tgl' => $row['tgl_pemesanan'],
                'pembayaran' => $row['jenis_pembayaran'],
                'dp' => $row['jml_cicilan_dp'],
                'inhouse' => $row['jml_cicilan_inhouse'],
                'blok' => $row['detail_blok'],
                'surat_bangunan' => $row['no_surat_bangunan'],
                'ktp' => $row['fotocopy_ktp']
            );
        }
        // Mengubah response menjadi format JSON
        echo json_encode($response);
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    // Jika id_pembayaran_dp tidak ada dalam data yang diterima
    $response = array(
        'status' => 'error',
        'message' => 'Parameter id_pembayaran_dp tidak valid'
    );

    header('Content-Type: application/json');
    echo json_encode($response);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>


    
