<?php
class Department
{
    public function __construct(public string $name)
    {
    }
}

class Employee
{
    public function __construct(private string $name, private Department $department)
    {
    }

    public function info(): string
    {
        return $this->name . " works in " . $this->department->name;
    }
}

$department = new Department("IT");
$employee = new Employee("Mekdes", $department);
echo $employee->info();
