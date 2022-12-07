<?php
require ('koneksi.php');
if( isset($_POST['pesan']) ){
    $Namapemesan = $_POST['txt_nama'];
    $tempatlahir = $_POST['txt_tempat'];
    $tglLahir = $_POST['txt_tglLahir'];
    $alamat = $_POST['txt_alamat'];
    $Notelp = $_POST['NomorTelp'];
    $NamaCluster = $_POST['txt_namacluster'];
    $Noperumahan = $_POST['Noperumahan'];
    $tglpemesanan = $_POST['txt_tglpemesanan'];
    $ktp = $_POST['txt_fotocopyktp'];

    

    $query = "INSERT INTO pemesanan_rumah(txt_nama,txt_tempat,txt_tglLahhir,txt_alamat,NomorTelp,txt_namacluster,Noperumahan,txt_tglpemesanan,txt_fotocopyktp) VALUES ('$Namapemesan','$tempatlahir','$tglLahir','$alamat','$Notelp','$NamaCluster','$Noperumahan','$tglpemesanan','$ktp')";

    $result = mysqli_query($koneksi, $query);
    
    if($result){
        echo "<script>alert('Data Telah Berhasil Disimpan');window.location='pemesanan.php'</script>";
    }
   
}
?>

<!<!DOCTYPE html>
<html lang="en">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/login.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

  
</head>

<body>
   
<div class="container-fluid">
                    <div class="col-md-9 register-center">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Formulir Pemesanan Rumah</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                    <form class="user" action="pemesanan.php" method="POST">
                                        <div class="form-group">
                                            <input name="txt_nama" type="text" class="form-control" placeholder="Nama Lengkap *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_tempat" type="text" class="form-control" placeholder="Tempat Lahir *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir *" value="" />
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
                                            <select class="form-control" name="Noperumahan">
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
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btnRegister"
                                            name="pesan"  value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
</body>

</html>