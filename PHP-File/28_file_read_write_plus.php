<?php

$file = __DIR__ . '/plus_mode.txt';
file_put_contents($file, "ABCDEFGH\n");

$handle = fopen($file, 'r+');
fseek($handle, 4);
fwrite($handle, "123");
rewind($handle);

echo stream_get_contents($handle);

fclose($handle);

?>