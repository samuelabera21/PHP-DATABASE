<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $pdo->query('SELECT * FROM missing_table');
} catch (PDOException $exception) {
    echo 'Exception mode is active';
}
