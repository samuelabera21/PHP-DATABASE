<?php

$file = tmpfile();

fwrite($file, "1234567890");
rewind($file);

echo fread($file, 4) . PHP_EOL;
echo 'Pointer: ' . ftell($file) . PHP_EOL;
fseek($file, 7);
echo fread($file, 3) . PHP_EOL;

fclose($file);

?>