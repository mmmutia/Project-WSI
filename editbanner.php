<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Upload Banner - Bernady Land Slawu</title>
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
      width: 70%;
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
    <center><a href="uploadbanner.php">+ &nbsp; Tambah Produk</a>   <a href="index-admin.php">Kembali</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Dekripsi</th>
          <th>Tanggal Posting</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_POST['update'])){
        $bannerId   = $_POST['txt_id'];
        $judul   = $_POST['txt_judul'];
        $deskripsi   = $_POST['txt_deskripsi'];
        $tglposting = $_POST['txt_tgl_posting'];
        $gambar = $_POST['txt_gambar'];
        
    
    
        $query = "UPDATE banner SET judul='$judul', deskripsi='$deskripsi',tgl_posting='$tglPosting ,  gambar='$gambar'' WHERE id_banner='$bannerId'";
        echo $query;
        $result = mysqli_query($koneksi, $query);
        header('Location: editbanner.php');
    }
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM banner ORDER BY id_banner ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['judul']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
          <td><?php echo $row['tgl_posting']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td style="text-align:center;">
              <a class="fa fa-pen" href="FormEdit_banner.php?id=<?php echo $row['id_banner']; ?>"></a> 
              <a class=" fa fa-trash" href="proses_hapus.php?id=<?php echo $row['id_banner']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"></a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>