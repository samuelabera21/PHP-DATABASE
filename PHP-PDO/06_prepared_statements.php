<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');

$statement = $pdo->prepare('INSERT INTO users (name) VALUES (:name)');
$statement->execute(['name' => 'Amina']);

echo 'Prepared statement executed';
