<?php

$handle = tmpfile();
$meta = stream_get_meta_data($handle);

fwrite($handle, "Temporary file content\n");
rewind($handle);

echo stream_get_contents($handle);
echo 'Temp path: ' . $meta['uri'] . PHP_EOL;

fclose($handle);

?>