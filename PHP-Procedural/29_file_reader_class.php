<?php
class FileReader
{
    public function read(string $path): string
    {
        return file_exists($path) ? file_get_contents($path) : 'File not found';
    }
}

$reader = new FileReader();
echo $reader->read(__DIR__ . '/sample.txt');
