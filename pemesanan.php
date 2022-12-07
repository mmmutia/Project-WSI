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
<title>Pemesanan - Bernady Land Slawu</title>

<link href="img/logo-bernady.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pemesanan - Bernady</title>

    <link href="img/logo-bernady.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <script>
        $(document).ready(function () {
            $('.form-checkbox').click(function () {
                if ($(this).is(':checked')) {
                    $('.form-password').attr('type', 'text');
                } else {
                    $('.form-password').attr('type', 'password');
                }
            });
        });
    </script>

</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/login.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                class="tab"> Pesan Rumah </label>
            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div id="login-box" class="col-md-12">
                    <form class="user" action="pemesanan.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input name="txt_namapemesan" type="text" class="form-control" placeholder="Nama Lengkap *"
                                value="" />
                        </div>
                        <div class="form-group">
                            <input name="txt_alamat" type="text" class="form-control" placeholder="Alamat *" value="" />
                        </div>
                        <div class="form-group">
                            <input name="NomorTelp" type="number" class="form-control" placeholder="Nomor Telepon *"
                                value="" />
                        </div>
                        <div class="form-group">
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
                                <input name="txt_tglpemesanan" type="date" class="form-control"
                                    placeholder="Tgl pemesanan *" value="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <input name="txt_fotocopyktp" type="file" class="form-control" placeholder="file *" value="" /> -->
                            <input type="file" name="txt_fotocopyktp" class="form-control">
                        </div>
                        <button type="submit" name="pesan" class="btn btn-primary btn-user btn-block">Pesan</button>
                        <a role="button" href="pemesanan-magnolia.php" class="btn btn-danger btn-user btn-block">Batal</a>
                    </form>
                </div>
                <div class="for-pwd-htm">
                    <div class="form-group">
                        <label for="user" class="label">Email</label>
                        <input type="email" name="txt_email" id="username" class="form-control">
                    </div>
                    <div class="group">
                        <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                    </div>
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</body>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#show_password').on('click', function () {
            var passwordField = $('#password');
            var passwordFieldType = passwordField.attr('type');
            if (passwordField.val() != '') {
                if (passwordFieldType == 'password') {
                    passwordField.attr('type', 'text');
                    $(this).text('Hide Password');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).text('Show Password');
                }
            } else {
                alert("Please Enter Password");
            }
        });
    });
</script>
</body>

</html>