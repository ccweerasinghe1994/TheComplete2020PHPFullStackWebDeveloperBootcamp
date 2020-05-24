<?php

class Student
{
    public float $marks;
    public float $mark1;
    public float $mark2;
    public float $mark3;


    private function IsPassed($marks)
    {
        if ($marks < 0 || $marks > 100) {
            echo "Enter correct Marks";
            return false;
        } else if ($marks < 35) {
            return false;
        }
        return true;


    }

    public function getResults(float $mark1, float $mark2, float $mark3)
    {
        $this->IsPassed($mark1) ?$this->mark1=$mark1:$this->mark1 = 0;
        $this->IsPassed($mark2) ?$this->mark2=$mark2:$this->mark2 = 0;
        $this->IsPassed($mark3) ?$this->mark3=$mark3:$this->mark3 = 0;
        echo "MarkOne:$this->mark1".PHP_EOL;
        echo "MarkOne:$this->mark2".PHP_EOL;
        echo "MarkOne:$this->mark3".PHP_EOL;
    }



}

$student = new Student();

$student->getResults(45,45,45);