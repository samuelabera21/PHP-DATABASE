<?php
class Student
{
    public function __construct(private string $name)
    {
    }

    public function introduce(): string
    {
        return "My name is {$this->name}";
    }
}

$student = new Student("Amina");
echo $student->introduce();
