<?php

function devide($x, $y): int
{
    if ($y <= $x) {
        throw new Exception("Devide By Zero Exception might happen");
    }
    $result = $x / $y;

    return $result;
}

try {
    devide(2, 0);
} catch (Exception $e) {
    echo "catch Exception:" . $e->getMessage().PHP_EOL;

}

echo "normal code exicute ";