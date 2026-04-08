<?php
file_put_contents('./catatan.txt', "hai aku raviel");

$file = file_get_contents('./catatan.txt');
echo "isi file: ". $file;