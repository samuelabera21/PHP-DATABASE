<?php

$file = __DIR__ . '/append_log.txt';

file_put_contents($file, "Start of log\n");

$handle = fopen($file, 'a');
fwrite($handle, "Appended line 1\n");
fwrite($handle, "Appended line 2\n");
fclose($handle);

echo file_get_contents($file);

?>