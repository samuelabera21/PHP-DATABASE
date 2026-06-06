<?php

$file = __DIR__ . '/slice.txt';

file_put_contents($file, "ABCDEFGHIJKLMNOPQRSTUVWXYZ");

echo file_get_contents($file, false, null, 5, 10) . PHP_EOL;

?>