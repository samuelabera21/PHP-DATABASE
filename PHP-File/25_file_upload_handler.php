<?php

if (!isset($_FILES['upload'])) {
    echo "Upload handler example\n";
    echo "Use move_uploaded_file(source, target) after a form posts a file.";
    exit;
}

$upload = $_FILES['upload'];
$target = __DIR__ . '/' . basename($upload['name']);

if (is_uploaded_file($upload['tmp_name'])) {
    move_uploaded_file($upload['tmp_name'], $target);
    echo 'Uploaded to ' . $target . PHP_EOL;
}

?>