<?php

$dir = __DIR__ . '/demo_directory';
$nested = $dir . '/nested';

if (!is_dir($nested)) {
    mkdir($nested, 0777, true);
}

echo 'Directory created: ' . (is_dir($nested) ? 'yes' : 'no') . PHP_EOL;

rmdir($nested);
rmdir($dir);

echo 'Directory removed: ' . (!is_dir($dir) ? 'yes' : 'no') . PHP_EOL;

?>