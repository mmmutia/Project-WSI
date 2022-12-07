<?php
require ('koneksi.php');
if( isset($_POST['pesan']) ){
    $Namapemesan = $_POST['txt_namapemesan'];
    // $tempatlahir = $_POST['txt_tempat'];
    // $tglLahir = $_POST['txt_tglLahir'];
    $alamat = $_POST['txt_alamat'];
    $Notelp = $_POST['NomorTelp'];
    $IdCluster = $_POST['txt_idcluster'];
    $jenispembayaran = $_POST['txt_metodepembayaran'];
    $tglpesan = $_POST['txt_tglpemesanan'];
    // $ktp = $_FILES['txt_fotocopyktp'];
    $target_dir = "img/filepemesanan/";
    $target_file = $target_dir . basename($_FILES["txt_fotocopyktp"]["name"]);
    $ktp = $_FILES["txt_fotocopyktp"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["txt_fotocopyktp"]["tmp_name"]);
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
        if (move_uploaded_file($_FILES["txt_fotocopyktp"]["tmp_name"], $target_file)) {
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    

    $query = "INSERT INTO pemesanan_rumah(nama_pemesan,alamat,no_telp_pemesan,id_cluster,tgl_pemesanan,fotocopy_ktp,jenis_pembayaran) VALUES ('$Namapemesan','$alamat','$Notelp','$IdCluster','$tglpesan','$ktp','$jenispembayaran')";

    $result = mysqli_query($koneksi, $query);
    
    if($result){
        echo "<script>alert('Data Telah Berhasil Disimpan');window.location='index.php'</script>";
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pemesanan - Bernady Land Slawu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="img/logo-bernady.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

</head>

<body>
   
<div class="container-fluid register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Formulir Pemesanan Rumah</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <form class="user" action="pemesanan.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input name="txt_namapemesan" type="text" class="form-control" placeholder="Nama Lengkap *" value="" />
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col-6 form-group">
                                                    <input name="txt_tempat" type="text" class="form-control" placeholder="Tempat Lahir *" value="" />
                                                </div>
                                                <div class="col-6 form-group">
                                                    <input name="txt_tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir *" value="" />
                                                </div>
                                            </div> -->
                                            
                                            <div class="form-group">
                                                <input name="txt_alamat" type="text" class="form-control" placeholder="Alamat *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input name="NomorTelp" type="number" class="form-control" placeholder="Nomor Telepon *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <!-- <input name="txt_namacluster" type="text" class="form-control"  placeholder="Nama cluster *" value="" /> -->
                                                <select class="form-control" name="txt_idcluster">
                                                    <option>-- Cluster --</option>
                                                    <option>1. Boulevard Magnolia</option>
                                                    <option>2. Camelia</option>
                                                    <option>3. Edge Gardenia</option>
                                                    <option>4. New Edge Gardenia</option>
                                                    <option>5. Pinewood</option>
                                                    <option>6. Plumeria</option>
                                                    <option>7. QBIX</option>
                                                    <option>8. Ruko</option>
                                                    <option>9. SOHO</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-8 form-group">
                                                    <!-- <input name="NPerumahan" type="number" class="form-control"  placeholder="Nomor Perumahan *" value="" /> -->
                                                    <select class="form-control" name="txt_metodepembayaran">
                                                        <option>-- Metode Pembayaran --</option>
                                                        <option>InHouse</option>
                                                        <option>KPR</option>
                                                    </select>
                                                </div>
                                                <div class="col-4 form-group">
                                                    <input name="txt_tglpemesanan" type="date" class="form-control" placeholder="Tgl pemesanan *" value="" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <!-- <input name="txt_fotocopyktp" type="file" class="form-control" placeholder="file *" value="" /> -->
                                                <input type="file" name="txt_fotocopyktp" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btnRegister" name="pesan"  value="PESAN"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>