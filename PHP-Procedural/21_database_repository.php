<?php
class StudentRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    public function create(string $name, string $department, int $year): bool
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO students (student_name, department, year) VALUES (:name, :department, :year)"
        );

        return $stmt->execute([
            'name' => $name,
            'department' => $department,
            'year' => $year,
        ]);
    }
}

$pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
echo "Repository ready";
