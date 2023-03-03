<?php

// "riley" --> "Hello Riley!"
// "JACK"  --> "Hello Jack!"

function helloName($name){
    $name = ucfirst(strtolower($name));
    return "Hello $name!";
}

echo helloName("riley");