<?php
// tanpa simbol &
function gantiNama($nama)
{
    $nama = "Indah";
}
$nama = "Risa";
echo 'keluaran ganti nama 1 = ';
gantiNama($nama);
echo $nama . '<br>';


// menggunakan simbol &
function gantiNama2(&$nama2)
{
    $nama2 = "Indah";
}
$nama2 = "Risa";
echo 'keluaran ganti nama 2 = ';
gantiNama2($nama2);
echo $nama2;

function kalilipat(&$angka)
{
    $angka = $angka * 2;
}

$x = 5;
echo $x . '<br>';
kalilipat($x);
echo $x . '<br>';
kalilipat($x);
echo $x . '<br>';
kalilipat($x);
echo $x . '<br>';
kalilipat($x);
echo $x . '<br>';
kalilipat($x);
