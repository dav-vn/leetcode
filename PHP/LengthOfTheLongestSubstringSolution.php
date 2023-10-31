<?php

/**
 * @param String $s
 * @return Integer
 *
 * Given a string s, find the length of the longest
 * substring
 * without repeating characters.
 */
class LengthOfTheLongestSubstringSolution
{
    // Runtime 8 ms
    // Memory 19.31
    function lengthOfLongestSubstring($s)
    {
        $i = 0;

        for ($j = 0; $j < strlen($s); $j++) {
            if (isset($set[$s[$j]])) {
                $i = max($set[$s[$j]] + 1, $i);
            }
            $set[$s[$j]] = $j;
            $maxLength = max($maxLength, $j - $i + 1);
        }

        return $maxLength ?? 0;
    }
}