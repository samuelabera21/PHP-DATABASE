<?php
try {
    $pdo = new PDO('sqlite::memory:');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query('SELECT * FROM invalid_table');
} catch (PDOException $exception) {
    echo 'Caught PDOException';
}
