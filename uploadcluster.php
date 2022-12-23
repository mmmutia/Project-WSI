<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Upload Cluster- Bernady Land Slawu</title>
    <!-- Favicons -->
  <link href="img/logo-bernady.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
        <h1>Tambah Cluster</h1>
      <center>
      <form method="POST" action="proses-tambah-cluster.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>ID Cluster</label>
          <input type="text" name="id_cluster" autofocus="" required="" />
        </div>
        <div>
          <label>Nama Cluster</label>
         <input type="text" name="nama_cluster" />
        </div>
        <div>
          <label>Blok</label>
         <input type="text" name="blok" required="" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" required="" />
        </div>
        <div>
          <label>Harga DP</label>
         <input type="text" name="harga_dp" required="" />
        </div>
        <div>
          <label>Foto Cluster</label>
         <input type="file" name="foto_cluster" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button> 
        </div>
        <!-- <div>
         <a href="poftfolio-admin.php"><button type="submit">Kembali</button></a>
        </div> -->
        </section>
      </form>
  </body>
</html>