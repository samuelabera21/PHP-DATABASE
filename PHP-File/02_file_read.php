<?php

$file = __DIR__ . '/read_sample.txt';

if (!file_exists($file)) {
    file_put_contents($file, "First line\nSecond line\nThird line\n");
}

echo file_get_contents($file);

?>