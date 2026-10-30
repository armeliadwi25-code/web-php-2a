<?php
// membuat fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
   
echo "Umur saya adalah ". hitungUmur(1990, 2020) ." tahun";
?>