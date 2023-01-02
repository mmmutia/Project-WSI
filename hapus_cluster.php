<?php
require ('koneksi.php');
$id = $_GET['id_cluster'];
mysqli_query($koneksi,"DELETE FROM cluster WHERE id_cluster='$id'") or die(mysql_error());
header("location:cluster.php");
?>
