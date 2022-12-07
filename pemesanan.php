<?php
require ('koneksi.php');
if( isset($_POST['pesan']) ){
    $Namapemesan = $_POST['txt_nama'];
    $tempatlahir = $_POST['txt_tempat'];
    $tglLahir = $_POST['txt_tglLahir'];
    $alamat = $_POST['txt_alamat'];
    $Notelp = $_POST['NomorTelp'];
    $NamaCluster = $_POST['txt_namacluster'];
    $Noperumahan = $_POST['txt_metodepembayaran'];
    $tglpemesanan = $_POST['txt_tglpemesanan'];
    $ktp = $_POST['txt_fotocopyktp'];

    

    $query = "INSERT INTO pemesanan_rumah(txt_nama,txt_tempat,txt_tglLahhir,txt_alamat,NomorTelp,txt_namacluster,Noperumahan,txt_tglpemesanan,txt_fotocopyktp) VALUES ('$Namapemesan','$tempatlahir','$tglLahir','$alamat','$Notelp','$NamaCluster','$Noperumahan','$tglpemesanan','$ktp')";

    $result = mysqli_query($koneksi, $query);
    
    if($result){
        echo "<script>alert('Data Telah Berhasil Disimpan');window.location='pemesanan.php'</script>";
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
                                        <form class="user" action="pemesanan.php" method="POST">
                                            <div class="form-group">
                                                <input name="txt_nama" type="text" class="form-control" placeholder="Nama Lengkap *" value="" />
                                            </div>
                                            <div class="row">
                                                <div class="col-6 form-group">
                                                    <input name="txt_tempat" type="text" class="form-control" placeholder="Tempat Lahir *" value="" />
                                                </div>
                                                <div class="col-6 form-group">
                                                    <input name="txt_tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir *" value="" />
                                                </div>
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
                                                <input name="txt_fotocopyktp" type="file" class="form-control" placeholder="file *" value="" />
                                            </div>
                                        </form>
                                        <div class="form-group">
                                            <input type="submit" class="btnRegister" name="pesan"  value="PESAN"/>
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