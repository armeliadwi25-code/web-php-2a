<?php
//buat session
if(!isset($_SESSION)) {
    session_start();
}

include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
$data  = mysqli_query($conn, $query);

if (mysqli_num_rows($data) > 0) {
    $_SESSION['username'] = $username;
    header("location: tampil_data.php");
    exit;
} else {
    echo "<script>alert('Username atau password salah'); location.href='login.php';</script>";
}
?>