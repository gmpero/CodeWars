<?php

// Your task is to make a function that can take any non-negative integer as 
// an argument and return it with its digits in descending order. Essentially, 
// rearrange the digits to create the highest possible number.

/// Неправильно прочитал задание
// Функция переворачивает число
function test(int $n){ 
    return (float)strrev("$n");
}

// echo test(2110);

function descendingOrder(int $n){
    $arr = str_split($n);
    arsort($arr);
    print_r($arr);
    return implode("", $arr);
}

echo descendingOrder(5978);