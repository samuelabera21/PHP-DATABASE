<?php
class Student
{
    public function __construct(private string $name, private string $department)
    {
    }

    public function details(): string
    {
        return $this->name . " - " . $this->department;
    }
}

$student = new Student("Amina", "Computer Science");
echo $student->details();
