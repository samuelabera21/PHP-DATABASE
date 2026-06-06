<?php

$file = __DIR__ . '/binary_demo.bin';

file_put_contents($file, random_bytes(32));

$handle = fopen($file, 'rb');
echo bin2hex(fread($handle, 16)) . PHP_EOL;
fclose($handle);

?>