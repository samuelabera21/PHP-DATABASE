<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE customers (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, email TEXT)');

$statement = $pdo->prepare('INSERT INTO customers (name, email) VALUES (:name, :email)');
$statement->execute([
    'name' => 'Sara',
    'email' => 'sara@example.com',
]);

echo 'Named placeholders used';
