<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('CREATE TABLE wallets (id INTEGER PRIMARY KEY AUTOINCREMENT, balance INTEGER)');
$pdo->exec('INSERT INTO wallets (balance) VALUES (100)');

$pdo->beginTransaction();
$pdo->exec('UPDATE wallets SET balance = balance - 20 WHERE id = 1');
$pdo->exec('UPDATE wallets SET balance = balance + 20 WHERE id = 1');
$pdo->commit();

echo 'Transaction committed';
