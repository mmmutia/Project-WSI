<?php

// panggil koneksi db
require "koneksi.php";
if (isset($_POST['submit'])) {
    // $pass = password_hash($password, PASSWORD_DEFAULT);
$username = $_POST['txt_email'];
$password = $_POST['txt_pass'];
// $id_status = $_POST['id_status'];

// cek username, terdaftar atau tidak
// $tampilkan = "SELECT * FROM user_detail WHERE user_email = '$username' and password = '$password'";

// $cek_user = mysqli_query($koneksi, $tampilkan);
$query = "SELECT * FROM user_detail";
$query_select = mysqli_query($koneksi, $query);
$result = mysqli_fetch_array($query_select);
// $num = mysqli_num_rows($query);

$user_valid = mysqli_fetch_array($result) or die('Query error :'.mysqli_error($result));

// uji jika email terdaftar
if ($user_valid) {
  //  jika username terdaftar
  // cek password sesuai atau tidak
  if ($password == $user_valid['user_password'] && $id_status = $user_valid['level']) {

    // jika password sesuai buat session

    session_start();
    $_SESSION['id_user'] = $user_valid['id_user'];
    // $_SESSION['identitas'] = $user_valid;
    //  uji level user
    if ($id_status == 1) {
      header('location: index-admin.php');
    } elseif ($id_status == 2) {
      header('location: index-admin.php');
    } elseif ($id_status == 3) {
      header('location: index.php');
    } elseif ($id_status == 4) {
      header('location: index.php');
    }
  } else {
    echo "<script>alert('Maaf, login gagal, password anda tidak sesuai!'); document.location='login.php'</script>";
  }
} else {
  echo "<script>alert('Maaf, login gagal, username anda tidak terdaftar'); document.location='login.php'</script>";
}
}



?>

<!DOCTYPE html>
<html lang="en">
    <title>Login-Bernady Land Slawu</title>

    <link href="img/logo-bernady.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Bernady</title>

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
        $(document).ready(function(){       
            $('.form-checkbox').click(function(){
                if($(this).is(':checked')){
                    $('.form-password').attr('type','text');
                }else{
                    $('.form-password').attr('type','password');
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
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
		<div class="login-form">
        <div id="login-box" class="col-md-12">
        <form class="user" action=" " method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="txt_email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" name="txt_pass">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="show_password" name="show_password">
                                                <label class="custom-control-label" for="show_password">Show Password</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                        
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
        $(document).ready(function(){  
            $('#show_password').on('click', function(){  
                var passwordField = $('#password');  
                var passwordFieldType = passwordField.attr('type');
                if(passwordField.val() != '')
                {
                    if(passwordFieldType == 'password')  
                    {  
                        passwordField.attr('type', 'text');  
                        $(this).text('Hide Password');  
                    }  
                    else  
                    {  
                        passwordField.attr('type', 'password');  
                        $(this).text('Show Password');  
                    }
                }
                else
                {
                    alert("Please Enter Password");
                }
            });  
        }); 
    </script>
</body>
</html>