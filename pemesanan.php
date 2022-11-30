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
                                    <div class="col-md-6">
                                    <form class="user" action="pemesanan.php" method="POST">
                                        <div class="form-group">
                                            <input name="txt_namapemesan" type="text" class="form-control" placeholder="Nama *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_ttl" type="date" class="form-control" placeholder="TTL *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_alamat" type="text" class="form-control" placeholder="Alamat *" value="" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <input name="txt_namacluster" type="text" class="form-control"  placeholder="Nama cluster *" value="" />
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                            <input name="txt_tglpemesanan" type="date" class="form-control" placeholder="Tgl pemesanan *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="txt_fotocopyktp" type="file" class="form-control" placeholder="file *" value="" />
                                            <input type="submit" name="upload" value="Upload">
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Pesan"/>
                                    </div>
                                </div>
                            </div>
                            

            </div>
            </body>
            </html>