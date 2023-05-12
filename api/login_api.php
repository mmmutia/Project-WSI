<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $email = $_POST['txt_email'];
    $password = $_POST['txt_password'];

    require_once 'koneksi.php';

    $sql = "SELECT * FROM users_detail WHERE user_email='$email' ";

    $response = mysqli_query($koneksi, $sql);

    $result = array();
    $result['login'] = array();
    
    if ( mysqli_num_rows($response) === 1 ) {
        
        $row = mysqli_fetch_assoc($response);

        if ( password_verify($password, $row['user_password']) ) {
            
            $index['name'] = $row['user_fullname'];
            $index['email'] = $row['user_email'];
            $index['id'] = $row['id'];

            array_push($result['login'], $index);

            $result['success'] = "1";
            $result['message'] = "success";
            echo json_encode($result);

            mysqli_close($conn);

        } else {

            $result['success'] = "0";
            $result['message'] = "error";
            echo json_encode($result);

            mysqli_close($conn);

        }

    }

}

?>