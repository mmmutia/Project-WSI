<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['txt_email'];
    $password = $_POST['txt_pass'];
    $name = $_POST['txt_nama'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    require_once 'koneksi.php';

    $sql = "INSERT INTO user_detail(id_user, user_email, user_password, user_fullname) VALUES ('', '$email', '$password', '$name')";

    if(mysqli_query($koneksi, $sql)){
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($koneksi);
    } else {
        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($koneksi);
    }
}

?>
