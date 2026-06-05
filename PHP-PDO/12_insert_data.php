<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('CREATE TABLE posts (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT)');

$statement = $pdo->prepare('INSERT INTO posts (title) VALUES (?)');
$statement->execute(['First post']);

echo 'Inserted data';
