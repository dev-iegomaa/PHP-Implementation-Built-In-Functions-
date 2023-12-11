<?php

/*
function calcCountOfArray(array $arr): int
{
    $count = 0;
    while ($arr) {
        $count++;
        array_pop($arr);
    }
    return $count;
}
*/

/**
 * Another Solution
 */
function calcCountOfArray(array $arr): int
{
    return array_reduce($arr, fn($count, $current) => $count + 1);
}

echo calcCountOfArray([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
