<?php

$file = __FILE__;

echo 'basename: ' . basename($file) . PHP_EOL;
echo 'dirname: ' . dirname($file) . PHP_EOL;
echo 'filename: ' . pathinfo($file, PATHINFO_FILENAME) . PHP_EOL;
echo 'extension: ' . pathinfo($file, PATHINFO_EXTENSION) . PHP_EOL;
echo 'realpath: ' . realpath($file) . PHP_EOL;

?>