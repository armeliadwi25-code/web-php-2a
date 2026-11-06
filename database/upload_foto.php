<?php
//buat session
if(!isset($_SESSION)) {
    session_start();
}

//jika ada orang yang masuk tanpa login
if(empty($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

//koneksi
include('koneksi.php');

//ambil data foto beserta nama pengurus
$query = "SELECT tb_foto.*, pengurus.nama
          FROM tb_foto
          JOIN pengurus ON tb_foto.id = pengurus.id
          ORDER BY tb_foto.id_foto ASC";
$data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Foto Pengurus</title>
</head>
<body>

<h1>Upload Foto Pengurus</h1>
<p><a href="tampil_data.php">Kembali ke Data Pengurus</a> | <a href="logout.php">Logout</a></p>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Pengurus</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
<?php
while($row = mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $row['id_foto']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><img src="foto/<?php echo $row['nama_file']; ?>" width="100"></td>
        <td>
            <a href="hapus_foto.php?id=<?php echo $row['id_foto']; ?>" onclick="return confirm('Yakin nih?')">Delete</a>
        </td>
    </tr>
<?php
}
?>
</table>

<hr>
<h1>Form Upload</h1>
<form method="post" action="proses_upload.php" enctype="multipart/form-data">
    <p>Nama
        <select name="id_pengurus">
<?php
//menampilkan dropdown data pengurus
$query_pengurus = "SELECT * FROM pengurus";
$data_pengurus = mysqli_query($conn, $query_pengurus);
while($row_pengurus = mysqli_fetch_assoc($data_pengurus)) {
?>
            <option value="<?php echo $row_pengurus['id']; ?>">
                <?php echo $row_pengurus['nama']; ?>
            </option>
<?php
}
?>
        </select>
    </p>
    <p>Foto <input type="file" name="foto"></p>
    <p>
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
    </p>
</form>

</body>
</html>