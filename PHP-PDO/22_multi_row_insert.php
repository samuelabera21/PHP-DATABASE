<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE messages (id INTEGER PRIMARY KEY AUTOINCREMENT, body TEXT)');

$statement = $pdo->prepare('INSERT INTO messages (body) VALUES (?)');
foreach (['Hello', 'World', 'PDO'] as $body) {
    $statement->execute([$body]);
}

echo 'Multiple rows inserted';
