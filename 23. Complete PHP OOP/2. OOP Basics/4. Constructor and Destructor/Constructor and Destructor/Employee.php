<?php

class Employee
{
    public string $name;
    public string $id;
    public int $totalLeavestaken;
    public int $totalWorkingDays;
    public int $PerHourSalary = 15;
    public int $NoOfHoursWorking = 9;

    /**
     * Employee constructor.
     * @param string $name
     * @param string $id
     * @param int $totalLeavestaken
     */
    public function __construct(string $name, string $id, int $totalLeavestaken)
    {
        $this->name = $name;
        $this->id = $id;
        $this->totalLeavestaken = $totalLeavestaken;
    }


    public function CalTheSalary($totalDays)
    {
        $this->totalWorkingDays = $totalDays - $this->totalLeavestaken;
        return $this->totalWorkingDays * $this->PerHourSalary * $this->NoOfHoursWorking;
    }

}

$employee_one = new Employee("Chamara", "sdjfgsjfg121212", 3);


$salary = $employee_one->CalTheSalary(31);

echo "$employee_one->name with $employee_one->id has a salary of $salary";

