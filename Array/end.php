<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function findEndElementOfArray(array $arr): int|float
{
    $count = sizeof($arr);
    return $arr[$count - 1];
}

echo findEndElementOfArray($arr);
