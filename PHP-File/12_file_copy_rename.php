<?php

$source = __DIR__ . '/copy_source.txt';
$copy = __DIR__ . '/copy_target.txt';
$renamed = __DIR__ . '/copy_renamed.txt';

file_put_contents($source, "Copy and rename example\n");
copy($source, $copy);
rename($copy, $renamed);

echo file_get_contents($renamed);

?>