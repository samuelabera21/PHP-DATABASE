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
            self::$instance = new DatabaseConnection();
        }

        return self::$instance;
    }
}

$conn1 = DatabaseConnection::getInstance();
$conn2 = DatabaseConnection::getInstance();
echo $conn1 === $conn2 ? "Same instance" : "Different instance";
