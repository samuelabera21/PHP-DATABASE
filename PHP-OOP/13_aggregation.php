<?php
class Teacher
{
    public function __construct(public string $name)
    {
    }
}

class Classroom
{
    public function __construct(private Teacher $teacher)
    {
    }

    public function describe(): string
    {
        return "Teacher: {$this->teacher->name}";
    }
}

$teacher = new Teacher("Mr. Bekele");
$classroom = new Classroom($teacher);
echo $classroom->describe();
