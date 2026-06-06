<?php

$dir = __DIR__;

echo "scandir:\n";
foreach (scandir($dir) as $item) {
    if ($item === '.' || $item === '..') {
        continue;
    }

    echo $item . PHP_EOL;
}

echo "glob php files:\n";
foreach (glob($dir . '/*.php') as $file) {
    echo basename($file) . PHP_EOL;
}

?>