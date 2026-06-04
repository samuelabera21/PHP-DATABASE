<?php
class StudentModel
{
    public function __construct(
        public string $name,
        public int $age
    ) {
    }

    public function label(): string
    {
        return "{$this->name} is {$this->age} years old";
    }
}

$student = new StudentModel("Sara", 20);
echo $student->label();
