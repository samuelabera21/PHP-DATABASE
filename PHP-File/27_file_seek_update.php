<?php

$file = __DIR__ . '/seek_update.txt';
file_put_contents($file, "Hello World");

$handle = fopen($file, 'r+');
fseek($handle, 6);
fwrite($handle, "PHP");
fclose($handle);

echo file_get_contents($file) . PHP_EOL;

?>