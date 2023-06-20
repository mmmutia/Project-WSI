<?php
require ('../koneksi.php');
$id_pemesanan_rumah = $_GET['id'];
$query=mysqli_query($koneksi,"DELETE FROM pemesanan_rumah WHERE id_pemesanan_rumah='$id_pemesanan_rumah'")or die(mysqli_error($koneksi));


if ($query) {
    echo "<script>
    alert('hapus data sukses');
    document.location= 'list-pemesanan.php ';
    </script>";
  } else {
    echo "<script>
    alert('hapus data gagal');
    document.location= 'list-pemesanan.php';
    </script>";
  }
?>
