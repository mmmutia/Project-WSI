<?php
require('koneksi.php');

session_start();
if (isset($_SESSION["name"]) != '') {
    header("location: team.php");
    header("location: services.php");
    header("location: portfolio.php");
    header("location: index.php");
    header("location: contact.php");
    header("location: about.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];

    if (!empty(trim($email)) && !empty(trim($pass))) {
        $query      = "SELECT * FROM user_detail WHERE user_email = '$email'";
        $result     = mysqli_query($koneksi, $query);
        $num        = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
        
    $id = $row['id_user'];
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $userName = $row['user_fullname'];
            $level = $row['level'];
        }
        if ($num > 0) {
            if ($level == 1) {
                if ($userVal == $email && $passVal == $pass) {
                    $_SESSION['id'] = $id;
                    $_SESSION['name'] = $userName;
                    $_SESSION['level'] = $level;
                    header('Location: admin/index.php');
                } else {
                    $error = 'user atau password salah!!';
                    echo "<script>alert('$error')</script>";
                    header('Location: login.php');
                }
            } else if ($level == 2) {
                if ($userVal == $email && $passVal == $pass) {
                    $_SESSION['id'] = $id;
                    $_SESSION['name'] = $userName;
                    $_SESSION['level'] = $level;
                    header('Location: admin/index-keuangan.php');
                } else {
                    $error = 'user atau password salah!!';
                    echo "<script>alert('$error')</script>";
                    header('Location: login.php');
                }
            } else if ($level == 3) {
                if ($userVal == $email && $passVal == $pass) {
                    $_SESSION['id'] = $id;
                    $_SESSION['name'] = $userName;
                    $_SESSION['level'] = $level;
                    header('Location: admin/index-pemilik.php');
                } else {
                    $error = 'user atau password salah!!';
                    echo "<script>alert('$error')</script>";
                    header('Location: login.php');
                }
            }else if ($level == 4) {
                if ($userVal == $email && $passVal == $pass) {
                    $_SESSION['id'] = $id;
                    $_SESSION['name'] = $userName;
                    $_SESSION['level'] = $level;
                    header('Location: index.php');
                } else {
                    $error = 'user atau password salah!!';
                    echo "<script>alert('$error')</script>";
                    header('Location: login.php');
                }
            } else {
                $error = 'Level anda tidak terdaftar!!';
                echo "<script>alert('$error')</script>";
                header('Location: login.php');
            }
        } else {
            $error = 'user tidak ditemukan!!';
            echo "<script>alert('$error')</script>";
            header('Location: login.php');
        }
    } else {
        $error = 'Data tidak boleh kosong!!';
        echo "<script>alert('$error')</script>";
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <script>
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
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
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div id="login-box" class="col-md-12">
                    <form class="user" action="login.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="txt_email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="txt_pass">
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
    $(document).ready(function() {
        $('#show_password').on('click', function() {
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