<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM pengurus WHERE id='$id'";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    echo "<script>alert('Data berhasil dihapus'); location.href='tampil_data.php';</script>";
} else {
    echo "Gagal menghapus: " . mysqli_error($conn);
}
?>