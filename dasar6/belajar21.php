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
// menghapus Pencil
unset($barang[2]);
 
//menampilkan dengan perulangan
echo "<h3>Data setelah dihapus</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}
//menambahkan Pencil pada indeks ke-2
$barang[2]="Pencil";
 
//menambahkan Penggaris di indeks terakhir
$barang[]="Penggaris";
 
echo "<h3>Data setelah Ditambah</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}
?>