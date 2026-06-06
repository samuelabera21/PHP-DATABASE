<?php

$file = __DIR__ . '/rotation.txt';
$backup = __DIR__ . '/rotation_backup.txt';

file_put_contents($file, "Current file content\n");

if (file_exists($backup)) {
    unlink($backup);
}

copy($file, $backup);
file_put_contents($file, "Rotated and rewritten content\n");

echo "Primary:\n" . file_get_contents($file);
echo "Backup:\n" . file_get_contents($backup);

?>