<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Edit Cluster - Bernady Land Slawu</title>
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
    <center><a href="uploadcluster.php">+ &nbsp; Tambah Produk</a>   <a href="portfolio-admin.php">Kembali</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>ID Cluster</th>
          <th>Nama Cluster</th>
          <th>Blok</th>
          <th>Harga</th>
          <th>Harga DP</th>
          <th>Foto Cluster</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php
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
        header('Location: editcluster.php?pesan=update');
    }
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM cluster ORDER BY id_cluster ASC";
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
          <td><?php echo $clusterId; ?></td>
          <td><?php echo $row['nama_cluster']; ?></td>
          <td><?php echo substr($row['blok'], 0, 20); ?>...</td>
          <td><?php echo $row['harga']; ?></td>
          <td><?php echo $row['harga_dp']; ?></td>
          <td style="text-align: center;"><img src="foto_cluster/<?php echo $row['foto_cluster']; ?>" style="width: 120px;"></td>
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