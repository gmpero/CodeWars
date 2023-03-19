<?php

// This kata is about static method that should return different values.

// On the first call it must be 1, on the second and others - it must be a double from previous value.

// Look tests for more examples, good luck :)

class A
{  
    private static $num = 1;
    public static function getNumber(): int
    {
        $result = self::$num;
        self::$num *= 2;

        return $result;
    }
}

echo A::getNumber();

