<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('CREATE TABLE profiles (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');
$pdo->exec("INSERT INTO profiles (name) VALUES ('Old Name')");

$statement = $pdo->prepare('UPDATE profiles SET name = :name WHERE id = :id');
$statement->execute(['name' => 'New Name', 'id' => 1]);

echo 'Updated data';
