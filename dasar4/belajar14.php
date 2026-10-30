<?php
$nilai = 88;
 
if ($nilai > 90) {
    $predikat = "A+";
} elseif($nilai > 80){
    $predikat = "A";
} elseif($nilai > 70){
    $predikat = "B+";
} elseif($nilai > 60){
    $predikat = "B";
} elseif($nilai > 50){
    $predikat = "C+";
} elseif($nilai > 40){
    $predikat = "C";
} elseif($nilai > 30){
    $predikat = "D";
} elseif($nilai > 20){
    $predikat = "E";
} else {
    $predikat = "F";
}
 
echo "Nilai anda: $nilai<br>";
echo "predikat: $predikat";
?>