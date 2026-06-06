<?php

$file = __DIR__ . '/chunk_read.txt';
file_put_contents($file, "Chunk one\nChunk two\nChunk three\n");

$handle = fopen($file, 'r');

while (!feof($handle)) {
    $chunk = fread($handle, 8);
    if ($chunk !== '') {
        echo $chunk . PHP_EOL;
    }
}

fclose($handle);

?>