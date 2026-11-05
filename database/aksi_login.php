<?php
//buat session
if(!isset($_SESSION)) {
    session_start();
}
 
//koneksi
require_once('koneksi.php');
 
//ambil data dari form
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
 
$query="SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
$data=mysqli_query($conn,$query);
 
//cek berapa jumlah data yang ada
$login=mysqli_num_rows($data);
 
if($login > 0) {
    // echo "Selamat datang";
    //memasukan data username kedalam session
    $_SESSION['username']=$username;
 
    // jika remember tercentang
    if(isset($_POST['remember'])) {
        //membuat cookie untuk mengingat username selama 1 menit
        setcookie('username',$username,time()+60);
    }
     
    //ke tampil_data
    header("location: tampil_data.php");
} else {
    // echo "Maaf gagal login";
    header("location: login.php");
}
 
?>