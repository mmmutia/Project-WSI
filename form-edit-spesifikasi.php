<?php
require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$query_mysql = mysqli_query($koneksi,"select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
if(isset($_POST['update'])){
    $idspesifikasi  = $_POST['txt_id_spesifikasi'];
    $idcluster   = $_POST['txt_id_cluster'];
    $pondasi   = $_POST['txt_pondasi'];
    $dinding = $_POST['txt_dinding'];
    $rangka_atap = $_POST['txt_rangka_atap'];
    $kusen = $_POST['kusen'];
    $plafond = $_POST['plafond'];
    $air = $_POST['air'];
    $listrik = $_POST['listrik'];
    $Jumlah_kamar = $_POST['jumlah_kamar'];
    $luas_tanah =$_POST['luas_tanah'];

    
    
    $query = "UPDATE spesifikasi_teknis SET id_cluster='$idcluster', pondasi='$pondasi', dinding='$dinding', rangka_atap='$rangka_atap', kusen='$kusen', plafond='$plafond', air='$air', listrik='$listrik', jumlah_kamar='$jumlah_kamar', luas_tanah='$luas_tanah' WHERE id_spesifikasi='$idspesifikasi'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: portofolio-details-admin.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM spesifikasi_teknis,cluster WHERE spesifikasi_teknis.id_cluster=cluster.id_cluster and id_spesifikasi=$_GET[update]";
$result = mysqli_query($koneksi, $query)or die(mysql_error());
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
  $idspesifikasi  = $row['id_spesifikasi'];
  $idcluster   = $row['id_cluster'];
  $pondasi   = $row['pondasi'];
  $dinding = $row['dinding'];
  $rangka_atap = $row['rangka_atap'];
  $kusen = $row['kusen'];
  $plafond = $row['plafond'];
  $air = $row['air'];
  $listrik = $row['listrik'];
  $Jumlah_kamar = $row['jumlah_kamar'];
  $luas_tanah =$row['luas_tanah'];
  
  
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Banner- Bernady Land Slawu</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: navy;
      }
    button {
          background-color: navy;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: navy;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit Spesifikasi</h1>
      <center>
      <form class="user" method="POST" action="form-edit-spesifikasi.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>ID Spesifikasi</label>
          <input type="hidden" name="txt_id_spesifikasi" value="<?php echo $id_cluster; ?>" autofocus=""/>
        </div>
        <div>
          <label>Pondasi</label>
          <input type="text" name="txt_pondasi" value="<?php echo $pondasi; ?>" autofocus=""/>
        </div>
        <div>
          <label>Dinding</label>
         <input type="text" name="txt_dinding" value="<?php echo $dinding; ?>" />
        </div>
        <div>
          <label>Rangka Atap</label>
         <input type="text" name="txt_rangka_atap" value="<?php echo $rangka_atap; ?>" />
        </div>
        <div>
          <label>Kusen</label>
         <input type="text" name="txt_kusen" value="<?php echo $kusen; ?>" />
        </div>
        <div>
          <label>Plafond</label>
         <input type="text" name="txt_plafond" value="<?php echo $plafond; ?>" />
        </div>
        <div>
          <label>Air</label>
         <input type="text" name="txt_air" value="<?php echo $air; ?>" />
        </div>
        <div>
          <label>Jumlah Kamar</label>
         <input type="text" name="txt_jumlah_kamar" value="<?php echo $jumlah_kamar; ?>" />
        </div>
        <div>
          <label>Luas Tanah</label>
         <input type="text" name="txt_luas_tanah" value="<?php echo $luas_tanah; ?>" />
        </div>
        <div>
         <button type="submit" name ="update" aria-activedescendant="">Update</button>
        </div>
        <p><a href="cluster.php">Kembali</a></p>
        </section>
      </form>
  </body>
</html>