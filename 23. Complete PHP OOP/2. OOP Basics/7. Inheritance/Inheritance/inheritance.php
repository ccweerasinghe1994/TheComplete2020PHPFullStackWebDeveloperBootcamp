<?php

declare(strict_types=1);

require_once "University.php";
require_once "Teacher.php";

$university = new University("Boston", "boston", "121212");

$teacherOne = new Teacher("chamara", "12", "engilsh", $university);

$teacherOne->printUniversityDetails();
$teacherOne->printteacherDetails();
