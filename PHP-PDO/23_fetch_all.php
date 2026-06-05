<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE roles (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');
$pdo->exec("INSERT INTO roles (name) VALUES ('Admin'), ('Editor')");

$rows = $pdo->query('SELECT * FROM roles')->fetchAll(PDO::FETCH_ASSOC);
echo count($rows);
