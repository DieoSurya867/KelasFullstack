<?php
// versi serialize
// $karyawan    = [
//     ['nama' => 'Toni', 'alamat' => 'Bandung'],
//     ['nama' => 'Naufal', 'alamat' => 'Bandung'],
//     ['nama' => 'Davi', 'alamat' => 'Jakarta']
// ];
// $data =  serialize($karyawan);
// file_put_contents('data.txt', $data);

// echo $output = file_get_contents('data.txt');
// $hasil = unserialize($output);
// print_r($hasil);

// versi json
$anggota    = [
    ['nama' => 'nahya', 'gol_darah' => 'A'],
    ['nama' => 'garti', 'gol_darah' => 'AB'],
    ['nama' => 'naufal', 'gol_darah' => 'B'],
    ['nama' => 'milehya', 'gol_darah' => 'O'],
];
$data2 =  json_encode($anggota);
file_put_contents('data2.txt', $data2);

echo $output2 = file_get_contents('data.txt');
$hasil2 = json_decode($output2, true);
print_r($hasil2);
