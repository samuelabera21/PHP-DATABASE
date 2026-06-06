<?php

$name = $_POST['name'];

$file = fopen("data.txt","a");

fwrite($file,$name."\n");

fclose($file);

echo "Saved";

?>