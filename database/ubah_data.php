<?php
include('koneksi.php');

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$gaji   = $_POST['gaji'];

$query = "UPDATE pengurus
          SET nama='$nama', alamat='$alamat', gender='$gender', gaji='$gaji'
          WHERE id='$id'";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    echo "<script>alert('Data berhasil diubah'); location.href='tampil_data.php';</script>";
} else {
    echo "Gagal mengubah: " . mysqli_error($conn);
}
?>