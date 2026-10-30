<?php
// membuat array
$barang = ["Buku", "Penghapus", "Pencil"];
 
// menampilkan isi array
echo "<h3>Dengan nomor indeks</h3>";
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";
 
//menampilkan dengan perulangan
echo "<h3>Dengan Foreach</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}
?>