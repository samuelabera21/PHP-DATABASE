<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('CREATE TABLE contacts (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)');

$pdo->prepare('INSERT INTO contacts (name) VALUES (?)')->execute(['Nati']);
$pdo->prepare('UPDATE contacts SET name = ? WHERE id = ?')->execute(['Nadia', 1]);
$rows = $pdo->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
$pdo->prepare('DELETE FROM contacts WHERE id = ?')->execute([1]);

echo count($rows);
