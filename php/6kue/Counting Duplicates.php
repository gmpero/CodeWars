<?php

// Count the number of Duplicates
// Write a function that will return the count of distinct case-insensitive 
// alphabetic characters and numeric digits that occur more than once in the input string. 
// The input string can be assumed to contain only alphabets (both uppercase and lowercase) 
// and numeric digits.

function duplicateCount($text) {
    $options = [];
    for ($i=0; $i < strlen($text) ; $i++) { 
        for ($j=0; $j < strlen($text) ; $j++) { 
           if($text[$i] === $text[$j] && $i !== $j){
            // $options  += array($text[$i] => );
                if(!array_key_exists($text[$i], $options)){
                    $i = 1;
                    $options  += array($text[$i] => $i);
                }else{
                    $options[$text[$i]][$i++];
                }
           }
        }
    }
   print_r($options);
}

echo duplicateCount("ABBANA");