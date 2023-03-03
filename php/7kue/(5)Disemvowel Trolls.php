<?php

// For example, the string "This website is for losers LOL!" 
// would become "Ths wbst s fr lsrs LL!".
function troll($str){
    $mas = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u'];
    $str = str_replace($mas, '', $str);
    return $str;
}

echo troll("This website is for losers LOL!");