<?php
//koneksi
require_once('koneksi.php');

//ambil dari variable form
$id_pengurus=$_POST['id_pengurus'];
$foto=$_FILES['foto']['name'];

//memasukan data ke database
$query="INSERT INTO tb_gambar VALUES (NULL, '$id_pengurus', '$foto')";
$simpan=mysqli_query($conn,$query) or die(mysqli_error($conn));

//upload file ke folder foto
move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$foto);

?>
<a href="upload_foto.php"> Kembali Untuk lihat Data</a>