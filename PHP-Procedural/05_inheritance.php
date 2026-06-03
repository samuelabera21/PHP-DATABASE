<?php
class Person
{
    public function speak(): string
    {
        return "I am a person";
    }
}

class Teacher extends Person
{
    public function teach(): string
    {
        return "I teach students";
    }
}

$teacher = new Teacher();
echo $teacher->speak() . " | " . $teacher->teach();
