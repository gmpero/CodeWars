<?php

function value($str, $s){
    return substr_count($str, $s);
}

echo value("hello", "o");