<?php

$file = __DIR__ . '/replace_content.txt';

file_put_contents($file, "Old name and old value\n");

$content = file_get_contents($file);
$content = str_replace(['Old name', 'old value'], ['New name', 'new value'], $content);
file_put_contents($file, $content);

echo file_get_contents($file);

?>