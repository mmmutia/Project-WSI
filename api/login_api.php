<?php
require_once '../koneksi.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    $email = (isset($data['email'])) ? $data['email'] : "";
    $password = (isset($data['password'])) ? $data['password'] : "";


    $sql = "SELECT * FROM user_detail WHERE user_email='$email' ";

    $response = mysqli_query($koneksi, $sql);

    $result = array();
    $result['login'] = array();
    
    if ( mysqli_num_rows($response) === 1 ) {
        
        $row = mysqli_fetch_assoc($response);

        if ( password_verify($password, $row['user_password']) ) {
            
            $result['Data']['name'] = $row['user_fullname'];
            $result['Data']['email'] = $row['user_email'];

            $result['success'] = true;
            $result['message'] = "success";
            $result['id'] = $row['id_user'];
            echo json_encode($result);

            mysqli_close($koneksi);

        } else {

            $result['success'] = false;
            $result['message'] = "error";
            echo json_encode($result);

            mysqli_close($koneksi);

        }

    }

}

?>