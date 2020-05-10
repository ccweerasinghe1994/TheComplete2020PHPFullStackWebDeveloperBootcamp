<?php

function custom_error_handler($errorNumber,$errorString){
    echo $errorString;
}

set_error_handler("custom_error_handler");

echo 5/0;