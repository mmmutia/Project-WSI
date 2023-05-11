<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "bernady";
$con = mysqli_connect($host, $user, $password, $database);

// Mengambil data input dari aplikasi Android
$email = $_POST['txt_mail'];
$password = $_POST['txt_pass'];

// Validasi input
if(empty($email) || empty($password)) {
    $response['success'] = false;
    $response['message'] = "Email dan password tidak boleh kosong";
} else {
    // Query untuk mencari user berdasarkan email dan password
    $query = "SELECT * FROM user_detail WHERE user_email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);
    $num_rows = mysqli_num_rows($result);
    
    if($num_rows > 0) {
        // Jika user ditemukan, kirim response berhasil
        $response['success'] = true;
        $response['message'] = "Login berhasil";
        $response['user'] = mysqli_fetch_assoc($result);
    } else {
        // Jika user tidak ditemukan, kirim response gagal
        $response['success'] = false;
        $response['message'] = "Email atau password salah";
    }
}

// Mengembalikan response dalam format JSON
echo json_encode($response);
mysqli_close($con);
?>
