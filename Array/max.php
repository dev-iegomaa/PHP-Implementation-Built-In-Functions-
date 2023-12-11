<?php

$numbers = [-5, 1, 0, -7, -1, -150, 500, 100, 80, 9000, 9.54, 9999.99];
function findMaximumNumber(array $arr): int|float
{
    $max = PHP_INT_MIN;
    foreach ($arr as $item) {
        if ($item > $max)
            $max = $item;
    }
    return $max;
}

echo findMaximumNumber($numbers);