<?php

// alphabet_position("The sunset sets at twelve o' clock.")
// Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" ( as a string )

function alphabet_position(string $s){
    $str = '';
    for ($i=0; $i < strlen($s); $i++) { 
        if(ctype_alpha($s[$i])){
            $str .= ord(strtoupper($s[$i])) - ord('A') + 1 . " ";
        }
    }
    $str = rtrim($str);
    return $str;
}

echo alphabet_position("the sunset");
