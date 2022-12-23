<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Upload Spesifikasi Teknis- Bernady Land Slawu</title>
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
      width: 800px;
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
        <h1>Tambah Spesifikasi Teknis</h1>
      <center>
      <form method="POST" action="proses-tambah-magnolia.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Pondasi</label>
          <input type="text" name="pondasi" required="" />
        </div>
        <div>
          <label>Dinding</label>
         <input type="text" name="dinding" />
        </div>
        <div>
          <label>Rangka Atap</label>
         <input type="text" name="rangka_atap" required="" />
        </div>
        <div>
          <label>Kusen</label>
         <input type="text" name="kusen" required="" />
        </div>
        <div>
          <label>Plafond</label>
         <input type="text" name="plafond" required="" />
        </div>
        <div>
          <label>Air</label>
         <input type="text" name="air" required="" />
        </div>
        <div>
          <label>Listrik</label>
         <input type="text" name="listrik" required="" />
        </div>
        <div>
          <label>Jumlah Kamar</label>
         <input type="text" name="jumlah_kamar" required="" />
        </div>
        <div>
          <label>Luas Tanah</label>
         <input type="text" name="luas tanah" required="" />
        </div>
        <div>
         <button type="submit">Simpan Spesifikasi</button> 
        </div>
        <!-- <div>
         <a href="poftfolio-admin.php"><button type="submit">Kembali</button></a>
        </div> -->
        </section>
      </form>
  </body>
</html>