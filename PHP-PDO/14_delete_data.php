<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE tasks (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT)');
$pdo->exec("INSERT INTO tasks (title) VALUES ('Task 1')");

$statement = $pdo->prepare('DELETE FROM tasks WHERE id = ?');
$statement->execute([1]);

echo 'Deleted data';
