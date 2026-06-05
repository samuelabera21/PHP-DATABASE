<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE numbers (id INTEGER PRIMARY KEY AUTOINCREMENT, value INTEGER)');
$pdo->exec('INSERT INTO numbers (value) VALUES (1), (2), (3)');

$statement = $pdo->query('SELECT value FROM numbers');
foreach ($statement as $row) {
    echo $row['value'];
}
