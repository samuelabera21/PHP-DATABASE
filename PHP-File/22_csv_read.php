<?php

$file = __DIR__ . '/sample.csv';

file_put_contents($file, "name,age\nAsha,21\nMekonnen,24\n");

$handle = fopen($file, 'r');

while (($row = fgetcsv($handle)) !== false) {
    echo implode(' | ', $row) . PHP_EOL;
}

fclose($handle);

?>