<?php
  require('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  if(isset($_POST['update'])){
    $clusterId   = $_POST['txt_id'];
    $clusterNama   = $_POST['txt_nama'];
    $clusterBlok   = $_POST['txt_blok'];
    $harga = $_POST['txt_harga'];
    $hargadp = $_POST['txt_hargadp'];
    $clusterFoto = $_POST['txt_foto'];
    
    
    $query = "UPDATE cluster SET nama_cluster='$clusterNama', blok='$clusterBlok',harga='$harga , harga_dp='$hargadp,foto_cluster=$clusterFoto'' WHERE id_cluster='$clusterId'";
        echo $query;
        $result = mysqli_query($koneksi, $query);
        header('Location: editcluster.php');
}
$clusterId = $_GET['id'];
$query = "SELECT * FROM cluster WHERE id_cluster='$clusterId'";
$result = mysqli_query($koneksi, $query)or die(mysql_error());
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
  $clusterId    = $row['id_cluster'];
  $clusterNama = $row['nama_cluster'];
  $clusterBlok = $row['blok'];
  $harga = $row['harga'];
  $hargadp= $row['harga_dp'];
  $clusterFoto= $row['foto_cluster'];
  
  
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
        <h1>Edit Cluster</h1>
      <center>
      <form class="user" method="POST" action="cluster.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>ID Cluster</label>
          <input type="hidden" name="txt_id" value="<?php echo $clusterId; ?>" autofocus=""/>
        </div>
        <div>
          <label>Nama Cluster</label>
          <input type="text" name="txt_nama" value="<?php echo $clusterNama; ?>" autofocus=""/>
        </div>
        <div>
          <label>Blok</label>
         <input type="text" name="txt_blok" value="<?php echo $clusterBlok; ?>" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="txt_harga" value="<?php echo $harga; ?>" />
        </div>
        <div>
          <label>Harga DP</label>
         <input type="text" name="txt_hargadp" value="<?php echo $hargadp; ?>" />
        </div>
        <div>
          <label>Foto Cluster</label>
         <input type="file" name="txt_foto" value="<?php echo $clusterFoto; ?>" />
        </div>
        <div>
         <button type="submit" name ="update" aria-activedescendant="">Update</button>
        </div>
        <p><a href="cluster.php">Kembali</a></p>
        </section>
      </form>
  </body>
</html>