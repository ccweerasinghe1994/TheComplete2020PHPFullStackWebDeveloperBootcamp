<?php
function customExceptionHandler($exception)
{
    echo "Exception Handled:" . $exception->getMessage();
}

set_exception_handler("customExceptionHandler");
try {
    throw new Exception("new Exception".PHP_EOL);
} finally {

//    this is allways exicuted with/without exception

    echo "this finally block is exicuted brfore the exceptoin is throwed".PHP_EOL;
}