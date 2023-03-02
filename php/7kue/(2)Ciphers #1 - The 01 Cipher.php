<?php

function encode(string $s){
    $alphas = array_merge(range('A', 'Z'), range('a', 'z'));
    //$word = str_split($s);
    $s = $s;
    for ($i=0; $i < strlen($s); $i++) { 
        if(ctype_alpha($s[$i])){
            $pos = array_search($s[$i], $alphas);
            if($pos%2==1)
                $s[$i] = 1;
            else 
                $s[$i] = 0;
        }else{
            $s[$i] = $s[$i];
        }
        
    }
    return $s;
}


echo encode("Hello World!");