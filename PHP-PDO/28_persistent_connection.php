<?php
$pdo = new PDO('sqlite::memory:', null, null, [PDO::ATTR_PERSISTENT => true]);

echo 'Persistent connection option set';
