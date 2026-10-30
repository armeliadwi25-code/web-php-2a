<?php
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Armelia<br/>";
}
 
function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
}
 
//memanggil function salam
salam();
 
$siswa="Ani";
$dari="kediri";
 
//memanggil function kenalan
kenalan($siswa,$dari);
?>