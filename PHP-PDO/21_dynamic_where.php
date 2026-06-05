<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE employees (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, department TEXT)');
$pdo->exec("INSERT INTO employees (name, department) VALUES ('Mekdes', 'IT')");

$department = 'IT';
$statement = $pdo->prepare('SELECT * FROM employees WHERE department = :department');
$statement->execute(['department' => $department]);

echo count($statement->fetchAll(PDO::FETCH_ASSOC));
