<?php

$source = __DIR__ . '/stream_source.txt';
$target = __DIR__ . '/stream_target.txt';

file_put_contents($source, "Stream copy example\nLine 2\n");

$in = fopen($source, 'r');
$out = fopen($target, 'w');

stream_copy_to_stream($in, $out);

fclose($in);
fclose($out);

echo file_get_contents($target);

?>