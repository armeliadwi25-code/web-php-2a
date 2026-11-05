<?php
//buat session
if(!isset($_SESSION)) {
    session_start();
}
 
//apakah ada cookie yang tersimpan
if(!empty($_COOKIE['username'])) {
    //memasukan variable session
    $_SESSION['username']=$_COOKIE['username'];
    header("location: tampil_data.php");
}
 
//jika variable session ada maka langsung ke tampil data
if(isset($_SESSION['username'])) {
    header("location: tampil_data.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1 align="center">Halaman Login</h1>
<form method="post" action="aksi_login.php">
     
    <table align="center">
        <tr>
            <th>Username</th>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="remember"> Remember Me</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Login</button>
                <button type="reset">Batal</button>
            </td>
        </tr>
    </table>
 
</form>
 
</body>
</html>