<?php
function perkalian($x, $y)
{
    $z = $x * $y;
    return $z;
}
echo "3 * 2 = " . perkalian(3, 2) . "<br>";

$alas = 10;
$tinggi = 5;
function luas_segitiga($alas, $tinggi)
{
    return $alas * $tinggi / 2;
}
echo "Luas segitiga adalah " . luas_segitiga($alas, $tinggi) . "<br>";
