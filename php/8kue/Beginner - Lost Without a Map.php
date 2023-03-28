<?php

// [1, 2, 3] --> [2, 4, 6]

function maps($x)
{
    foreach ($x as $key => $value) {
        $x[$key] = $value *2; 
    }

    return $x;
}

$arr = [1, 2, 3];

print_r(maps($arr));