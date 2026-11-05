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
        <th>Aksi</th>
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
        <td>
            <a href="edit_data.php?id=<?php echo $row['id']; ?>">Edit</a> |
            <a href="hapus_data.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin nih?')">Delete</a>
        </td>
    </tr>
<?php
}
?>
</table>

<hr>

<h1>Input Data</h1>

<form method="post"