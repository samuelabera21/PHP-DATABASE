<?php

$base = __DIR__ . '/modes';

if (!is_dir($base)) {
    mkdir($base, 0777, true);
}

$samples = [
    'r' => "Readable file\n",
    'r+' => "Read and write file\n",
    'w' => "Write only file\n",
    'w+' => "Read and write with truncate\n",
    'a' => "Append only file\n",
    'a+' => "Append and read file\n",
    'x' => "Exclusive create file\n",
    'x+' => "Exclusive create read/write file\n",
    'c' => "Create if missing, keep content\n",
    'c+' => "Create if missing, read/write\n",
];

foreach ($samples as $mode => $text) {
    $path = $base . '/' . str_replace('+', 'plus', $mode) . '.txt';

    if ($mode === 'r' || $mode === 'r+') {
        file_put_contents($path, $text);
    }

    $handle = @fopen($path, $mode);

    if ($handle === false) {
        echo $mode . ': cannot open' . PHP_EOL;
        continue;
    }

    if (str_contains($mode, 'w') || str_contains($mode, 'a') || str_contains($mode, 'c') || str_contains($mode, 'x')) {
        fwrite($handle, $text);
    }

    rewind($handle);
    $content = stream_get_contents($handle);
    fclose($handle);

    echo $mode . ': ' . trim($content) . PHP_EOL;
}

?>