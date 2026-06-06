<?php

$file = __DIR__ . '/lock_demo.txt';
$handle = fopen($file, 'c+');

if (flock($handle, LOCK_EX)) {
    fwrite($handle, "Locked write\n");
    fflush($handle);
    flock($handle, LOCK_UN);
}

fclose($handle);

echo file_get_contents($file);

?>