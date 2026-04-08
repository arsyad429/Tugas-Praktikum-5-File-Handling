<?php
$file = fopen('./data.txt', 'r');

$baris = fgets($file);

echo $baris;

fclose($file);