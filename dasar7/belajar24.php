<?php
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Armelia<br/>";
}
 
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
 
function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
    echo "Umur saya adalah ". hitungUmur(1994, 2020) ." tahun";
}
 
//memanggil function salam
salam();
 
$siswa="Ani";
$dari="kediri";
 
//memanggil function kenalan
kenalan($siswa,$dari);
?>