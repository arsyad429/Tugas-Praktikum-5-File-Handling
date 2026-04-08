<?php

$file = fopen('./catatan.txt', "a");

fwrite($file, "\naku ub");
fclose($file);

$file = fopen('./catatan.txt', "r");
while (!feof($file)){
    $baris = fgets($file);
    echo $baris . "<br>";
}

fclose($file);

