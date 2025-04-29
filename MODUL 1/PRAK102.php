<?php
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;

$luasAlas = $panjang * $lebar; 
$volumeLimasPersegiPanjang = (1/3) * $luasAlas * $tinggi;

echo number_format ($volumeLimasPersegiPanjang, 3). " m3";
?>