<?php

$numbers = [-5, 1, 0, -7, -1, -150, 500, 100, 80, 9000, 9.54, 9999.99];
function findMinimumNumber(array $arr): int|float
{
    $min = PHP_INT_MAX;
    foreach ($arr as $item) {
        if ($item < $min)
            $min = $item;
    }
    return $min;
}

echo findMinimumNumber($numbers);