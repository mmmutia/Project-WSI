<?php
require_once '../koneksi.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $data = json_decode(file_get_contents('php://input'), true);

    $email = (isset($data['email'])) ? $data['email'] : "";
    $password = (isset($data['password'])) ? $data['password'] : "";
    $name = (isset($data['nama'])) ? $data['nama'] : "";

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user_detail(id_user, user_email, user_password, user_fullname, level) VALUES (null, '$email', '$password', '$name',4)";

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
