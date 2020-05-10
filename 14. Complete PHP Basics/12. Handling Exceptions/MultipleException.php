<?php

function customExceptionHandler($exception)
{
    echo "Cath exception" . $exception->getMessage() . PHP_EOL;
}

function devide($x, $y): int
{
    try {
        if ($y <= $x) {
            throw new Exception("Devide By Zero Exception might happen");
        }
        $result = $x / $y;


    } catch (Exception $exception) {
        throw new Exception("Devide method has input parameters that are less than zero"
            . $exception->getMessage());
    }
    return $result;
}

set_exception_handler('customExceptionHandler');

devide(2, 0);