<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_spesifikasi = $_POST['txt_id'];
  $pondasi   = $_POST['txt_pondasi'];
  $dinding   = $_POST['txt_dinding'];
  $rangka_atap   = $_POST['txt_rangka_atap'];
  $kusen = $_POST['txt_kusen'];
  $plafond = $_POST['txt_plafond'];
  $air = $_POST['txt_air'];
  $listrik = $_POST['txt_listrik'];
  $jumlah_kamar = $_POST['txt_jumlah_kamar'];
  $luas_tanah = $_POST['txt_luas_tanah'];

   $query = "INSERT INTO spesifikasi_teknis (pondasi, dinding, rangka_atap, kusen, plafond, air, listrik, jumlah_kamar, luas_tanah) VALUES ('$pondasi', '$dinding', '$rangka_atap', '$kusen', '$plafond', '$air', '$listrik', '$jumlah_kamar', '$luas_tanah')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='edit-magnolia.php';</script>";
                  }
}
