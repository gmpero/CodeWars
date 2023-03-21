<?php

// Complete the solution so that it returns true if the first argument(string) 
// passed in ends with the 2nd argument (also a string).

// solution('abc', 'bc') // returns true
// solution('abc', 'd') // returns false

function solution($str, $ending) {
    // if(strpos($str, $ending, -strlen($ending)))
    //     return 1;
    // else
    //     return 0;
    return strpos($str, $ending, -strlen($ending)) ? 1 : 0;
}

echo solution("samurai", "ai");
echo solution("sumo", "omo"); 
echo solution("ninja", "ja"); 
echo solution("sensei", "i"); 
echo solution("samurai", "ra"); 

    // (true, solution("samurai", "ai"));
    // (false, solution("sumo", "omo"));
    // (true, solution("ninja", "ja"));
    // (true, solution("sensei", "i"));
    // (false, solution("samurai", "ra"))


    // function solution($str, $ending){
    //     $str_length = strlen($str);
    //     $ending_length = strlen($ending);
        
    //     if ($ending_length > $str_length) {
    //       return false;
    //     }
        
    //     $ending_substring = substr($str, $str_length - $ending_length, $ending_length);
        
    //     return ($ending_substring === $ending);
    //   }

