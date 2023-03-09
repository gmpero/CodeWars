<?php

use LDAP\Result;

function rgb($r,$g,$b){
    $arr = [$r, $g, $b];
    for ($i=0; $i < count($arr) ; $i++) { 
        if($arr[$i]<0)
            $arr[$i] = '0';

        if($arr[$i]>255)
            $arr[$i] = '255';

        $arr[$i] = base_convert($arr[$i], 10, 16);
        if(strlen($arr[$i])<2)
            $arr[$i] = '0' . $arr[$i];
    }

    $result = '';
    $result = strtoupper(implode($arr));
    return $result;
}

print_r(rgb(255, 255, 255));

// rgb(255, 255, 255); // returns FFFFFF
// rgb(255, 255, 300); // returns FFFFFF
// rgb(0, 0, 0); // returns 000000
// rgb(148, 0, 211); // returns 9400D3