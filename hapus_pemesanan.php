<?php
require ('koneksi.php');
$id = $_GET['id_pemesanan_rumah'];
mysqli_query($koneksi,"DELETE FROM pemesanan_rumah WHERE id_pemesanan_rumah='$id'") or die(mysql_error());
header("location:list-pemesanan-admin.php");
?>
