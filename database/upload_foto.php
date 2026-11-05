<?php
//koneksi
require_once('koneksi.php');
 
//ambil data dari database
$query="SELECT * FROM tb_gambar";
$data=mysqli_query($conn,$query);
?>
 
<html>
    <head>
        <title>Upload File</title>
    </head>
    <body>
    <h1>Upload Foto Pengurus</h1>
 
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Nama Pengurus</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
        <tr>
            <td><?php echo $row['id_gambar']; ?></td>
            <td><?php echo $row['id_pengurus']; ?></td>
            <td><?php echo $row['gambar']; ?></td>
            <td>Hapus</td>
        </tr>
<?php
 }
?>
    </table>
</body>
</html>