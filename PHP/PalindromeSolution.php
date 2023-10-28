<?php

class PalindromeSolution
{
    // Runtime 15 ms
    // Memory 19.14 MB
    function isPalindrome(int $x): bool
    {
        return strrev($x) == $x;
    }

    // Runtime 44 ms
    // Memory 19.12 MB
    function alternativeIsPalindrome(int $x): bool
    {
            $reminder = 0;
            $reverse = 0;
            $number = 0;

            if ($x < 0) {
                return false;
            }

            while ($number != 0) {
                $reminder = $number % 10;
                $reverse = $reverse * 10 + $reminder;
                $number = floor($number / 10);
            }

            return $x === $reverse;
    }
}