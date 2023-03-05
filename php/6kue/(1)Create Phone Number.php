<?php
// => returns "(123) 456-7890"

// Классное решение через sprintf
// return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$digits);
// git commit
function createPhoneNumber($numbersArray) {
    $str = '';
    foreach ($numbersArray as $key => $value) {
        $str .= $value;
    }
    $str = sprintf("(%s) %s-%s",
	substr($str, 0, 3),
	substr($str, 3, 3),
	substr($str, 6, 4),);
    return $str;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
echo createPhoneNumber($arr);