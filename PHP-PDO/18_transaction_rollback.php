<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('CREATE TABLE inventory (id INTEGER PRIMARY KEY AUTOINCREMENT, quantity INTEGER)');
$pdo->exec('INSERT INTO inventory (quantity) VALUES (10)');

try {
    $pdo->beginTransaction();
    $pdo->exec('UPDATE inventory SET quantity = quantity - 1 WHERE id = 1');
    throw new RuntimeException('Something went wrong');
    $pdo->commit();
} catch (Throwable $exception) {
    $pdo->rollBack();
    echo 'Transaction rolled back';
}
