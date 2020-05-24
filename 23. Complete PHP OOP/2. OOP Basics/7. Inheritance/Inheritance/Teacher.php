<?php

class Teacher extends University
{
    public string $teacherName;
    public string $teacherAge;
    public string $subject;

    /**
     * Teacher constructor.
     * @param string $teacherName
     * @param string $teacherAge
     * @param string $subject
     * @param University $university
     */
    public function __construct(string $teacherName, string $teacherAge, string $subject, University $university)
    {


        $this->teacherName = $teacherName;
        $this->teacherAge = $teacherAge;
        $this->subject = $subject;
        $this->universityName = $university->universityName;
        $this->universityAddress = $university->universityAddress;
        $this->universityId = $university->universityId;

    }

    function printteacherDetails()
    {
        echo "$this->teacherName" . PHP_EOL;
        echo "$this->teacherName" . PHP_EOL;
        echo "$this->subject" . PHP_EOL;
    }


}