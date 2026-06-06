<?php

$file = __DIR__ . '/write_new.txt';

$handle = fopen($file, 'w');
fwrite($handle, "New file created with w mode\n");
fwrite($handle, "Second line\n");
fclose($handle);

echo file_get_contents($file);

?>