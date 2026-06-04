<?php
class DatabaseConnection
{
    private static ?DatabaseConnection $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): DatabaseConnection
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

$db1 = DatabaseConnection::getInstance();
$db2 = DatabaseConnection::getInstance();
echo $db1 === $db2 ? "Same instance" : "Different instance";
