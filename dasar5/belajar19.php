<?php
$daftar_siswa = [
    "Ani",
    "Budi",
    "Sigit",
    "Hanif",
];
 
echo "<h3>Daftar Nama Siswa</h3>";
echo "<ul>";
 
foreach($daftar_siswa as $siswa){
    echo "<li>$siswa</li>";
}
 
echo "</ul>";
 
?>