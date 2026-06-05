<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

echo 'Emulated prepares enabled';
