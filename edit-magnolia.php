<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Spesifikasi - Bernady Land Slawu</title>
    <!-- Favicons -->
  <link href="img/logo-bernady.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: navy;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 90%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px navy;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px navy;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: navy;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    
    </style>
  </head>
  <body>
    <center><h1>Data Produk</h1><center>
    <center><a href="upload-magnolia.php">+ &nbsp; Tambah Produk</a>   <a href="portfolio-details-magnolia-admin.php">Kembali</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Pondasi</th>
          <th>Dinding</th>
          <th>Rangka Atap</th>
          <th>Kusen</th>
          <th>Plafond</th>
          <th>Air</th>
          <th>Listrik</th>
          <th>Jumlah Kamar</th>
          <th>Luas Tanah</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php
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
        
    
    
        $query = "UPDATE spesifikasi_teknis SET pondasi='$pondasi', dinding='$dinding', rangka_atap='$rangka_atap', kusen='$kusen', plafond='$plafond', air='$air', listrik='$listrik', jumlah_kamar='$jumlah_kamar', luas_tanah='$luas_tanah' WHERE id_spesifikasi='$id'";
        echo $query;
        $result = mysqli_query($koneksi, $query);
        header('Location: porofolio-details-magnolia-admin.php');
    }
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM spesifikasi_teknis ORDER BY id_spesifikasi ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $clusterId = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $id_spesifikasi; ?></td>
          <td><?php echo $row['pondasi']; ?></td>
          <td><?php echo substr($row['dinding'], 0, 20); ?>...</td>
          <td><?php echo $row['rangka_atap']; ?></td>
          <td><?php echo $row['kusen']; ?></td>
          <td><?php echo $row['plafond']; ?></td>
          <td><?php echo $row['air']; ?></td>
          <td><?php echo $row['listrik']; ?></td>
          <td><?php echo $row['jumlah_kamar']; ?></td>
          <td><?php echo $row['luas_tanah']; ?></td>
          <td style="text-align:center;">
              <a class="fa fa-pen" href="form-edit-cluster.php?id=<?php echo $row['id_cluster']; ?>"></a> 
              <a class=" fa fa-trash" href="hapus-cluster.php?id=<?php echo $row['id_cluster']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"></a>
          </td>
      </tr>
         
      <?php
        $clusterId++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>