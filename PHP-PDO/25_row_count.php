<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE logs (id INTEGER PRIMARY KEY AUTOINCREMENT, message TEXT)');
$pdo->exec("INSERT INTO logs (message) VALUES ('A'), ('B'), ('C')");

$statement = $pdo->query('SELECT * FROM logs');
echo $statement->rowCount();
