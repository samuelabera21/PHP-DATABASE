<?php
$pdo = new PDO('sqlite::memory:');

if ($pdo instanceof PDO) {
    echo 'PDO connection established';
}
