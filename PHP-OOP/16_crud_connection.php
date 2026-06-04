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

$pdo = new PDO("sqlite::memory:");
$db = new DbConnection($pdo);
echo "PDO connection ready";
