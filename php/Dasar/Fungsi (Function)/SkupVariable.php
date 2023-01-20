<?php

// cara salah
// $nama="Meilan";
// function tulisPesan() 
// {
//   echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
// }
// tulisPesan($nama);

$nama = "Dilan";
function cetakPesan($nama)
{
    echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}
cetakPesan($nama);

//contoh lain penggunaan function tapi tidak dianjurkan Karena alasan pengembangan yang kurang baik untuk kedepaannya
$gebetan = "Milhya";
function tulisPesan()
{
    global $gebetan;
    echo "Halo $gebetan, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}
tulisPesan($gebetan);
