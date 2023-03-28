<?php

function findIt(array $seq) 
{
    $vals = array_count_values($seq);
    // for ($i=1; $i < count($vals); $i++) { 
    //     if($vals[$i] % 2 == 1 && array_key_exists($i, $seq))
    //         return $vals[$i];
    // }
    foreach ($vals as $key => $value) {
        if($value%2 == 1)
            return $key;
    }
    print_r($vals);
}


$arr = [1,2,2,3,3,3,4,3,3,3,2,2,1];
echo findIt($arr);