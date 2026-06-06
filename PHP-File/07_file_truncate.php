<?php

$file = __DIR__ . '/truncate.txt';

file_put_contents($file, "Old content that will be removed\n");

$handle = fopen($file, 'w');
fwrite($handle, "New content after truncate\n");
fclose($handle);

echo file_get_contents($file);

?>