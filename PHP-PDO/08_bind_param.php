<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE categories (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');

$name = 'Books';
$statement = $pdo->prepare('INSERT INTO categories (name) VALUES (:name)');
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->execute();

echo 'bindParam example complete';
