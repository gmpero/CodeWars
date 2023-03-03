<?php

// "This is an example!" ==> "sihT si na !elpmaxe"
// "double  spaces"      ==> "elbuod  secaps"

function perev($str)
{
    $str = strrev($str);
    // Общий случай реверса слов разделенных пробелами: 
    $str = implode(' ', array_reverse(explode(' ', $str))); 
    return $str;
}

print_r(perev("double  spaces"));