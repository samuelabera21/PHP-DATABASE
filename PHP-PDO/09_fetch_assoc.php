<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');
$pdo->exec("INSERT INTO students (name) VALUES ('Selam')");

$statement = $pdo->query('SELECT * FROM students');
$row = $statement->fetch(PDO::FETCH_ASSOC);

echo $row['name'];
