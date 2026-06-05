<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE orders (id INTEGER PRIMARY KEY AUTOINCREMENT, item TEXT)');
$pdo->prepare('INSERT INTO orders (item) VALUES (?)')->execute(['Phone']);

echo $pdo->lastInsertId();
