<?php
class DbConnection
{
    public function __construct(private PDO $pdo)
    {
    }

    public function getPdo(): PDO
    {
        return $this->pdo;
    }
}

$pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
$db = new DbConnection($pdo);
echo "Connected to XAMPP MySQL";
