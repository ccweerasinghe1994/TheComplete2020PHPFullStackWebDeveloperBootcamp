<?php
function customExceptionHandler($exception)
{
    echo "Cath exception" . $exception->getMessage() . PHP_EOL;
}

function devide($x, $y): int
{
    if ($y <= $x) {
        throw new Exception("Devide By Zero Exception might happen");
    }
    $result = $x / $y;

    return $result;
}
set_exception_handler('customExceptionHandler');

devide(2,0);

