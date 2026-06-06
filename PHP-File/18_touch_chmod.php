<?php

$file = __DIR__ . '/touch_example.txt';

touch($file);
chmod($file, 0644);

echo 'Exists: ' . (file_exists($file) ? 'yes' : 'no') . PHP_EOL;
echo 'Permissions: ' . substr(sprintf('%o', fileperms($file)), -4) . PHP_EOL;

?>