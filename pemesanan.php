<?php
require('koneksi.php');
require ('koneksi.php');
if( isset($_POST['pesan']) ){
    $userName = $_POST['txt_nama'];
    

    $query = "INSERT INTO pemesanan_rumah VALUES ('', '$userMail', '$userPass', '$userName', 2)";
    $result = mysqli_query($koneksi, $query);
    header('Location: login.php');
    if($saved) header("Location: login.php");
   
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
   
<div class="container register">
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
                                    <form class="user" action="pemesanan.php" method="POST">
                                        <div class="form-group">
                                            <input name="txt_namapemesan" type="text" class="form-control" placeholder="Nama Lengkap *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_tempat" type="text" class="form-control" placeholder="Tempat Lahir *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_tanggalLahir" type="date" class="form-control" placeholder="Tanggal Lahir *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_alamat" type="text" class="form-control" placeholder="Alamat *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="NomorTelp" type="number" class="form-control" placeholder="Nomor Telepon *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <!-- <input name="txt_namacluster" type="text" class="form-control"  placeholder="Nama cluster *" value="" /> -->
                                            <select class="form-control" name="txt_namacluster">
                                                <option>-- Nama Cluster --</option>
                                                <option>Boulevard Magnolia</option>
                                                <option>Camelia</option>
                                                <option>Edge Gardenia</option>
                                                <option>New Edge Gardenia</option>
                                                <option>Pinewood</option>
                                                <option>Plumeria</option>
                                                <option>QBIX</option>
                                                <option>Ruko</option>
                                                <option>SOHO</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!-- <input name="NPerumahan" type="number" class="form-control"  placeholder="Nomor Perumahan *" value="" /> -->
                                            <select class="form-control" name="Nperumahan">
                                                <option>-- Nomor Perumahan --</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_tglpemesanan" type="date" class="form-control" placeholder="Tgl pemesanan *" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input name="txt_fotocopyktp" type="file" class="form-control" placeholder="file *" value="" />
                                            <input type="submit" name="upload" value="Upload">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btnRegister"  value="Pesan"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>