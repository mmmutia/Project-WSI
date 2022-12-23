<?php
  require('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  if(isset($_POST['update'])){
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
    
    
    $query = "SELECT spesifikasi_teknis SET pondasi='$pondasi
    ', dinding='$dinding', rangka_atap='$rangka_atap', kusen='$kusen', plafond='$plafond', air='$air', listrik='$listrik', jumlah_kamar='$jumlah_kamar', luas_tanah='$luas_tanah' WHERE id_spesifikasi='$id_spesifikasi'";
        echo $query;
        $result = mysqli_query($koneksi, $query);
        header('Location: edit-magnolia.php');
}

if (isset($_GET['id'])) {
$id_spesifikasi = $_GET['id'];
$query = "SELECT * FROM spesifikasi_teknis WHERE id_spesifikasi='$id_spesifikasi'";
$result = mysqli_query($koneksi, $query)or die(mysql_error());
}else{
    echo 'data kosong';
   }
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
    $pondasi   = $_POST['pondasi'];
    $dinding   = $_POST['dinding'];
    $rangka_atap   = $_POST['rangka_atap'];
    $kusen = $_POST['kusen'];
    $plafond = $_POST['plafond'];
    $air = $_POST['air'];
    $listrik = $_POST['listrik'];
    $jumlah_kamar = $_POST['jumlah_kamar'];
    $luas_tanah = $_POST['luas_tanah'];
  
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Spesifikasi- Bernady Land Slawu</title>
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
        <h1>Edit Spesifikasi Teknis</h1>
      <center>
      <form class="user" method="POST" action="edit-magnolia.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>Pondasi</label>
          <input type="text" name="txt_pondasi" value="<?php echo $pondasi; ?>" autofocus=""/>
        </div>
        <div>
          <label>Rangka Atap</label>
          <input type="text" name="txt_rangka_atap" value="<?php echo $rangka_atap; ?>" autofocus=""/>
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
          <label>Listrik</label>
         <input type="text" name="txt_listrik" value="<?php echo $listrik; ?>" />
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
        <p><a href="editcluster.php">Kembali</a></p>
        </section>
      </form>
  </body>
</html>