<?php
//koneksi database
$host="localhost";
$user="root";
$pass="";
$database="login";
mysql_connect($host,$user,$pass);
mysql_select_db($database);

$username=$_POST["username"];
$password=$_POST["password"];

$query=mysql_query("SELECT*FROM login WHERE username='".$username."' AND password='".$password."'");
$result=mysql_fetch_assoc($query);
$jumlah_result=mysql_num_rows($query);
if ($jumlah_result==0) {
 # code...
 header("Location:index.php?error=login");

}elseif ($result["username"]==$username && $result["password"]==$password) {
 # code...
 //proses menyimpan session login
 session_start();
 $_SESSION["username"]=$result["username"];
 $_SESSION["login"]= $result["username"].date('Y-m-d H:i:s');
 header("Location:home.php");
}
?>