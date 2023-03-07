<?php

// Examples (input -> output)
// 6, "I"     -> "IIIIII"
// 5, "Hello" -> "HelloHelloHelloHelloHello"

function repeat($n, $m){
    return str_repeat($m, $n);
}

echo repeat(5, "m");