<?php
require_once '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    $email = (isset($data['email'])) ? $data['email'] : "";
    $password = (isset($data['password'])) ? $data['password'] : "";

    // Menginisialisasi koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "bernady");

    if (!$koneksi) {
        // Gagal terhubung ke database
        $result['success'] = false;
        $result['message'] = "Database connection error";
        echo json_encode($result);
        exit();
    }

    // Melakukan sanitasi terhadap variabel yang digunakan dalam kueri
    $email = mysqli_real_escape_string($koneksi, $email);

    $sql = "SELECT * FROM user_detail WHERE user_email='$email' ";

    $response = mysqli_query($koneksi, $sql);

    $result = array();
    // $result['login'] = array();

    if (mysqli_num_rows($response) === 1) {

        $row = mysqli_fetch_assoc($response);

        if (password_verify($password, $row['user_password'])) {

            $result['Data']['name'] = $row['user_fullname'];
            $result['Data']['email'] = $row['user_email'];

            $result['success'] = true;
            $result['message'] = "Success";
            $result['id'] = $row['id_user'];
            echo json_encode($result);

        } else {

            $result['success'] = false;
            $result['message'] = "Invalid password";
            echo json_encode($result);
        }

    } else {

        $result['success'] = false;
        $result['message'] = "Invalid email".$email;
        echo json_encode($result);
    }

    mysqli_close($koneksi);
}
?>
