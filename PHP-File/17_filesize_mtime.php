<?php

$file = __DIR__ . '/metadata.txt';

file_put_contents($file, "Metadata example\n");

echo 'size: ' . filesize($file) . PHP_EOL;
echo 'mtime: ' . date('Y-m-d H:i:s', filemtime($file)) . PHP_EOL;
echo 'ctime: ' . date('Y-m-d H:i:s', filectime($file)) . PHP_EOL;

?>