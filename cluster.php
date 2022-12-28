<?php
require 'koneksi.php';

if (isset($_POST['simpan'])){
    // $id_cluster = $_POST['id_cluster'];
    $foto = $_FILES['foto_cluster']['name'];
    $temp = $_FILES['foto_cluster']['tmp_name'];
    $nama_cluster = $_POST['nama_cluster'];
    $blok = $_POST['blok'];
    $harga = $_POST['harga'];
    $hargaDp = $_POST['hargaDp'];
    $image_files = $nama_cluster. '.jpg';

//     $queryy ="INSERT INTO cluster (foto_cluster,nama_cluster,blok,harga,harga_dp) VALUES ('$image_files','$nama_cluster','$blok','$harga','$hargaDp')";
//    $query =mysqli_query ($koneksi, $queryy);
$query = mysqli_query($koneksi, "INSERT INTO cluster (foto_cluster,nama_cluster,blok,harga,harga_dp) VALUES ('$foto','$nama_cluster','$blok','$harga','$hargaDp')");
// $data = mysqli_fetch_array($query_mysql);
copy($temp, "img/filepemesanan/" . $image_files);

    if ($query) {
        echo "<script>
    alert('simpan data sukses');
   
    </script>";
    } else {
        echo "<script>
    alert('simpan data gagal');
    document.location= 'cluster.php';
    </script>";
    }
}

// if (isset($_POST['ubah'])){
//     $id_cluster = $_POST['id_cluster'];
//     $foto = $_FILES['foto_cluster']['name'];
//     $temp = $_FILES['foto_cluster']['tmp_name'];
//     $nama_cluster = $_POST['nama_cluster'];
//     $blok = $_POST['blok'];
//     $harga = $_POST['harga'];
//     $hargaDp = $_POST['hargaDp'];

//     $update_query = mysqli_fetch_array($koneksi, "UPDATE cluster SET foto_cluster = '$foto_cluster', nama_cluster = '$nama_cluster', blok ='$blok', harga = '$harga', hargaDp = '$hargaDp' WHERE id_cluster = '$id_cluster'");
//     copy($temp, "img/filepemesanan/" . $image_files);

//     if ($query) {
//         echo "<script>
//     alert('simpan data sukses');
//     document.location= 'index.php?halaman=cluster';
//     </script>";
//     } else {
//         echo "<script>
//     alert('simpan data gagal');
//     document.location= 'index.php?halaman=cluster';
//     </script>";
//     }
// }

if (isset($_POST['hapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM cluster
        WHERE id_cluster = '$_POST[id_cluster]'
    ");

if ($hapus) {
    echo "<script>
    alert('hapus data sukses');
    document.location= 'index.php?halaman=cluster';
    </script>";
} else {
    echo "<script>
    alert('hapus data gagal');
    document.location= 'index.php?halaman=cluster';
    </script>";
}
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
        <h1>Form Data Cluster</h1>
      <center>
      <form class="user" method="POST" action="" enctype="multipart/form-data" >
      
        <div>
          <label>Foto Cluster</label>
          <input type="file" name="foto_cluster" accept="image/*" required/>
        </div>
        <div>
          <label>Nama Cluster</label>
         <input type="text" name="nama_cluster" value="" />
        </div>
        <div>
          <label>Blok</label>
         <input type="text" name="blok" value="" />
        </div>
        <div>
            <label>Harga</label>
            <input type="number" name="harga" value="">
        </div>
        <div>
            <label>Harga DP</label>
            <input type="number" name="hargaDp" value="">
        </div>
        <div>
         <button type="submit" name ="simpan" aria-activedescendant="">Simpan</button>
         <button type="button" >Batal</button>
        </div>
        </section>
      </form>
  </body>
</html>
<div class="table-responsive">
        <table id="member" class="table table-striped table-bordered w-100 nowrap" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Cluster</th>
                    <th>Blok</th>
                    <th>Harga</th>
                    <th>Harga DP</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 include 'koneksi.php';
                 $no = 1;
                 $cluster = mysqli_query($koneksi, "SELECT * FROM cluster");
                 while ($row = mysqli_fetch_array($cluster)) {
                    $id_cluster = $row['id_cluster'];
                    $foto_cluster = $row['foto_cluster'];
                    $nama_cluster = $row['nama_cluster'];
                    $blok = $row['blok'];
                    $harga = $row['harga'];
                    $hargaDp = $row['harga_dp'];
                ?>
                 <tr>
                 <td><?php echo $no++ ?></td>       
                        <td><?php echo $nama_cluster ?></td>
                        <td><?php echo $blok ?></td>
                        <td><?php echo $harga ?></td>
                        <td><?php echo $hargaDp?></td>
                       <td>
                         <img src="img/filepemesanan/ <?php echo $foto_cluster ?>" width="100px">
                        </td>
                        <td>
                          hapus
                        </td>
                 </tr>
                 <?php }?>
            </tbody>
          </table>