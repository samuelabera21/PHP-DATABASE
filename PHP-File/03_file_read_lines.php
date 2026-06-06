<?php

$file = __DIR__ . '/lines_sample.txt';

if (!file_exists($file)) {
    file_put_contents($file, "Apple\nBanana\nCherry\n");
}

$lines = file($file, FILE_IGNORE_NEW_LINES);

foreach ($lines as $index => $line) {
    echo ($index + 1) . ": " . $line . PHP_EOL;
}

?>