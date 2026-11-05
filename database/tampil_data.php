<?php
//memanggil file koneksi
include('koneksi.php');
 
//ambil data dari database
$query="SELECT * FROM pengurus ORDER BY id ASC";
 
$data=mysqli_query($conn,$query);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Data Pengurus</title>
</head>
<body>
 
<h1>Data Pengurus</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
    </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['gaji']; ?></td>
    </tr>
<?php 
 }
?>
</table>
</body>
</html>