<?php

$file = __DIR__ . '/delete_me.txt';

file_put_contents($file, "This file will be deleted\n");

if (file_exists($file)) {
    unlink($file);
}

echo 'Exists after delete: ' . (file_exists($file) ? 'yes' : 'no') . PHP_EOL;

?>