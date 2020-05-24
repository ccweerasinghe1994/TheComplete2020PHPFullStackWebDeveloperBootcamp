<?php

class Employee
{
    public string $name;
    public string $id;
    public int $totalLeavestaken;
    public int $totalWorkingDays;
    public int $PerHourSalary = 15;
    public int $NoOfHoursWorking = 9;


    public function CalTheSalary($totalDays)
    {
        $this->totalWorkingDays = $totalDays - $this->totalLeavestaken;
        return $this->totalWorkingDays * $this->PerHourSalary * $this->NoOfHoursWorking;
    }

}

$employee_one = new Employee();

$employee_one->name = "Chamara";
$employee_one->id = "sdjfgsjfg121212";
$employee_one->totalLeavestaken = 3;
$salary = $employee_one->CalTheSalary(31);

echo "$employee_one->name with $employee_one->id has a salary of $salary";
