<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE products (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');

$statement = $pdo->prepare('INSERT INTO products (name) VALUES (:name)');
$statement->bindValue(':name', 'Laptop', PDO::PARAM_STR);
$statement->execute();

echo 'bindValue example complete';
