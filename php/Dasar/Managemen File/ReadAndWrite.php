<?php
$pesan = "Selamat Datang Di Channel Milhya";
file_put_contents("file.txt", $pesan);

$content = file_get_contents("file.txt");
echo $content;
