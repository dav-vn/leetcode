<?php

class TwoSumSolution
{
    // Runtime 840 ms
    // Memory 19.97 MB
    function twoSum(array $nums, int $target): array
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                }
            }
        }

        return [];
    }

    // Runtime 15 ms
    // Memory 20.09 MB
    function hashTwoSum(array $nums, int $target): array
    {
        $numMap = [];

        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];

            if (isset($numMap[$complement])) {
                return [$numMap[$complement], $i];
            }

            $numMap[$nums[$i]] = $i;
        }

        return [];
    }
}