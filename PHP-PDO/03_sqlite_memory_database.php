<?php
$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE notes (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT)');

echo 'SQLite in-memory database created';
