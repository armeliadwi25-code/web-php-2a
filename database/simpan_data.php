<?php
include('koneksi.php');

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$gaji   = $_POST['gaji'];

$query = "INSERT INTO pengurus (id, nama, gender, alamat, gaji)
          VALUES ('$id', '$nama', '$gender', '$alamat', '$gaji')";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    echo "<script>alert('Data berhasil disimpan'); location.href='tampil_data.php';</script>";
} else {
    echo "Gagal menyimpan: " . mysqli_error($conn);
}
?>