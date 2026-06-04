<?php
class StudentRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    public function countStudents(): string
    {
        return "Student repository is connected";
    }
}

$repository = new StudentRepository(new PDO("sqlite::memory:"));
echo $repository->countStudents();
