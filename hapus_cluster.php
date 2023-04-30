<?php
session_start();
include 'koneksi.php';

// masukan konekasi DB
// ambil variable ID dari URL

$idcluster = $_GET['id'];

//Proses query hapus data

$del=mysqli_query($koneksi,"DELETE FROM cluster WHERE id_cluster='$idcluster'");
if($del){
// $_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil dihapus.</font>';
// header("Location:../admin/tambah_cluster.php"); 
echo "<script>alert('Data Telah Berhasil Di Hapus');window.location='admin/cluster.php'</script>";


// kembali ke tampil data
}else{
echo "Gagal hapus data!";
}
?>
