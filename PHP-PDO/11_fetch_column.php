<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE cities (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');
$pdo->exec("INSERT INTO cities (name) VALUES ('Addis Ababa')");

$statement = $pdo->query('SELECT name FROM cities');
echo $statement->fetchColumn();
