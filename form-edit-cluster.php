<?php
require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$query_mysql = mysqli_query($koneksi,"select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
if( isset($_POST['edit']) ){
    // $Id_user = $_POST['txt_id_user'];
    // $foto = $_FILES['foto_cluster']['name'];
    // $temp = $_FILES['foto_cluster']['tmp_name'];
    
    $nama_cluster = $_POST['txt_namacluster'];
    $blok = $_POST['txt_blok'];
    $jumlah_unit = $_POST['jumlah_unit'];
    $harga = $_POST['harga'];
    $hargaDp = $_POST['hargaDp'];
    // $filter = $_POST['txt_filter'];
    $target_dir = "img/images_cluster/";
    $target_file = $target_dir . basename($_FILES["txt_fotocluster"]["name"]);
    $uploadcluster = $_FILES['txt_fotocluster']['name'];
    $filecluster = $_FILES['temp_name'];
    $image_files = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["txt_fotocluster"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["txt_fotocluster"]["tmp_name"], $target_file)) {
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    

    $query = "UPDATE cluster SET nama_cluster='$nama_cluster', blok='$blok',harga='$harga , harga_dp='$hargadp,foto_cluster=$uploadcluster'' WHERE id_cluster='$clusterId'";
        echo $query;
        $result = mysqli_query($koneksi, $query);
        header('Location: form-edit-cluster.php');
    
    if($result){
        echo "<script>alert('Data Telah Berhasil Di Update');window.location='cluster.php'</script>";
    }
   
}
//   require('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
//   if(isset($_POST['update'])){
//     $clusterId   = $_POST['txt_id'];
//     $clusterNama   = $_POST['txt_nama'];
//     $clusterBlok   = $_POST['txt_blok'];
//     $harga = $_POST['txt_harga'];
//     $hargadp = $_POST['txt_hargadp'];
//     $clusterFoto = $_POST['txt_foto'];
    
    
//     $query = "UPDATE cluster SET nama_cluster='$clusterNama', blok='$clusterBlok',harga='$harga , harga_dp='$hargadp,foto_cluster=$clusterFoto'' WHERE id_cluster='$clusterId'";
//         echo $query;
//         $result = mysqli_query($koneksi, $query);
//         header('Location: form-edit-cluster.php');
// }
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
         <button type="submit" name ="edit" aria-activedescendant="">Update</button>
        </div>
        <p><a href="cluster.php">Kembali</a></p>
        </section>
      </form>
  </body>
</html>