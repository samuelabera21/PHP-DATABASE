<?php
class User
{
    public int $id;
    public string $name;
}

$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');
$pdo->exec("INSERT INTO users (name) VALUES ('Hana')");

$statement = $pdo->query('SELECT * FROM users');
$user = $statement->fetchObject(User::class);

echo $user->name;
