<?php
class StudentModel
{
    public function __construct(private PDO $pdo)
    {
    }

    public function all(): array
    {
        return $this->pdo->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
    }
}

$pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
$model = new StudentModel($pdo);
echo "Student model ready";
