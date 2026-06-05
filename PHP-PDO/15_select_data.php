<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE books (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT)');
$pdo->exec("INSERT INTO books (title) VALUES ('Book A')");

$statement = $pdo->query('SELECT * FROM books');
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

echo count($rows);
