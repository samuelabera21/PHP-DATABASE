<?php

$file = __DIR__ . '/existence.txt';
$folder = __DIR__ . '/sample_folder';

if (!file_exists($file)) {
    file_put_contents($file, "Check me\n");
}

if (!is_dir($folder)) {
    mkdir($folder);
}

echo 'file_exists: ' . (file_exists($file) ? 'true' : 'false') . PHP_EOL;
echo 'is_file: ' . (is_file($file) ? 'true' : 'false') . PHP_EOL;
echo 'is_dir: ' . (is_dir($folder) ? 'true' : 'false') . PHP_EOL;

?>