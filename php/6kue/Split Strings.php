<?php

// Complete the solution so that it splits the string into pairs of two characters. 
// If the string contains an odd number of characters 
// then it should replace the missing second character 
// of the final pair with an underscore ('_').

// * 'abc' =>  ['ab', 'c_']
// * 'abcdef' => ['ab', 'cd', 'ef']

function solution($str) {
    // return $number%2==0 ? $number * 8 : $number * 9;

    $str = preg_replace('(.{2})', "$0-", $str);
    $mas = explode('-', $str);
    
    if(strlen($mas[count($mas)-1]) < 2 && strlen($mas[count($mas)-1]) != null)
        $mas[count($mas)-1] = $mas[count($mas)-1] . '_';
    if(strlen($mas[count($mas)-1]) == null)
        array_pop($mas);
    return $mas;
}

print_r(solution('asasasdasad'));