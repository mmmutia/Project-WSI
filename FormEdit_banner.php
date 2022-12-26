<?php
  require('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  if(isset($_POST['update'])){
    $bannerId   = $_POST['txt_id_banner'];
    $judul   = $_POST['txt_judul'];
    $deskripsi   = $_POST['txt_deskripsi'];
    $gambar = $_POST['txt_gambar'];
    $tglposting = $_POST['txt_tgl_posting'];
    
    
    $query = "UPDATE banner SET judul='$judul', deskripsi='$deskripsi', gambar='$gambar', tgl_posting='$tglposting' WHERE id_banner='$bannerId'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: editbanner.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM banner WHERE id_banner='$id'";
$result = mysqli_query($koneksi, $query)or die(mysql_error());
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
  $id     = $row['id_banner'];
  $judul = $row['judul'];
  $deskripsi = $row['deskripsi'];
  $gambar = $row['gambar'];
  $tglposting= $row['tgl_posting'];
   
  
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
        <h1>Edit Banner</h1>
      <center>
      <form class="user" method="POST" action="editbanner.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>ID</label>
          <input type="hidden" name="txt_id_banner" value="<?php echo $id; ?>" autofocus=""/>
        </div>
        <div>
          <label>Judul</label>
          <input type="text" name="txt_judul" value="<?php echo $judul; ?>" autofocus=""/>
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="txt_deskripsi" value="<?php echo $deskripsi; ?>" />
        </div>
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="txt_gambar" value="<?php echo $gambar; ?>" />
        </div>
        <div>
          <label>Tanggal Posting</label>
         <input type="date" name="txt_tgl_posting" value="<?php echo $tglposting; ?>" />
        </div>
        <div>
         <button type="submit" name ="update" aria-activedescendant="">Update</button>
        </div>
        <p><a href="editbanner.php">Kembali</a></p>
        </section>
      </form>
  </body>
</html>