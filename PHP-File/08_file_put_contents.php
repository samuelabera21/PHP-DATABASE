<?php

$file = __DIR__ . '/put_contents.txt';

file_put_contents($file, "Line 1\nLine 2\n");
file_put_contents($file, "Line 3\n", FILE_APPEND);

echo file_get_contents($file);

?>