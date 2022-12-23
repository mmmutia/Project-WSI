<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
    $clusterId   = $_POST['txt_id'];
    $clusterNama   = $_POST['txt_nama'];
    $clusterBlok   = $_POST['txt_blok'];
    $harga = $_POST['txt_harga'];
    $hargadp = $_POST['txt_hargadp'];
    $clusterFoto = $_POST['txt_foto']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($clusterFoto != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $clusterFoto); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto_cluster']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'."$clusterFoto"; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO cluster (id_cluster, nama_cluster, blok, harga, harga_dp, foto_cluster) VALUES ('$cluserID', '$clusterNama', '$clusterBlok', '$harga', '$hargadp', '$clusterFoto')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='editcluster.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='uploadcluster.php';</script>";
            }
} else {
   $query = "INSERT INTO cluster (id_cluster, nama_cluster, blok, harga, harga_dp, foto_cluster) VALUES ('$cluserID', '$clusterNama', '$clusterBlok', '$harga', '$hargadp', '$clusterFoto')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='editcluster.php';</script>";
                  }
}
