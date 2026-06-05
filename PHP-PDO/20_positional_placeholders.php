<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE tags (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');

$statement = $pdo->prepare('INSERT INTO tags (name) VALUES (?)');
$statement->execute(['php']);

echo 'Positional placeholders used';
