<?php

class Student
{
    public string $name = "chamara";
    public int $age = 2;

    function __construct($name = "", $age = "")
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function printData()
    {
        echo "this is a $this->age,Name:$this->name";
    }
}

$student = new Student("chamara",12);

$student->printData();