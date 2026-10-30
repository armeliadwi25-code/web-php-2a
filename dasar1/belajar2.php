<html>
 
<head>
    <title>Belajar</title>
</head>
<body bgcolor="red">
<font color="white">
<?php
echo "<h1>";
echo "SELAMAT DATANG DI PHP";
echo "</h1>";
// misalkan kita punya bilangan 
$harga = 150000;
 
// jika kita cetak dengan echo:
echo "Harganya adalah Rp $harga <br>";
 
// jika kita cetak dengan printf
printf("Harganya adalah Rp %.2f<br>", $harga);
?>
</font>
</body>
</html>