<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE items (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');
$pdo->exec("INSERT INTO items (name) VALUES ('Item 1'), ('Item 2'), ('Item 3')");

$statement = $pdo->prepare('SELECT * FROM items LIMIT :limit OFFSET :offset');
$statement->bindValue(':limit', 2, PDO::PARAM_INT);
$statement->bindValue(':offset', 1, PDO::PARAM_INT);
$statement->execute();

echo count($statement->fetchAll(PDO::FETCH_ASSOC));
