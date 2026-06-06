<?php

$root = __DIR__;
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
);

foreach ($iterator as $item) {
    if ($item->isFile() && strtolower($item->getExtension()) === 'php') {
        echo $item->getFilename() . PHP_EOL;
    }
}

?>