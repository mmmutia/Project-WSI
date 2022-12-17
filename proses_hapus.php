<?php
require ('koneksi.php');
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM banner WHERE id_banner='$id'") or die(mysql_error());
header("location:editbanner.php");
?>
