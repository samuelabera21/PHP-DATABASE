<?php

$file = __DIR__ . '/demo_basic.txt';

if (!file_exists($file)) {
    file_put_contents($file, "PHP File basics\n");
}

echo "File: " . basename($file) . PHP_EOL;
echo "Dir: " . dirname($file) . PHP_EOL;
echo "Exists: " . (file_exists($file) ? 'yes' : 'no') . PHP_EOL;
echo "Is file: " . (is_file($file) ? 'yes' : 'no') . PHP_EOL;
echo "Size: " . filesize($file) . " bytes" . PHP_EOL;
echo "Pathinfo: " . pathinfo($file, PATHINFO_EXTENSION) . PHP_EOL;

?>