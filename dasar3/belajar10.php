<?php
 
$x = true;
$y = false;
 
// variabel $z akan bernilai false
$z = $x && $y;
printf("%b && %b = %b", $x,$y,$z);
echo "<br>";
 
// variabel $z akan bernilai true
$z = $x || $y;
printf("%b || %b = %b", $x,$y,$z);
echo "<br>";
 
// variabel $z akan bernilai false
$z = !$x;
printf("!%b = %b", $x, $z);
echo "<br>";
 
?>