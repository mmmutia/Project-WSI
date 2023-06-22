<?php
require ('../koneksi.php');
$id_progres = $_GET['id'];
$query=mysqli_query($koneksi,"DELETE FROM proggres WHERE id='$id_progres'")or die(mysqli_error($koneksi));


if ($query) {
    echo "<script>
    alert('hapus data sukses');
    document.location= 'progres.php ';
    </script>";
  } else {
    echo "<script>
    alert('hapus data gagal');
    document.location= 'progres.php';
    </script>";
  }
?>
