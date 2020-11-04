<?php

namespace LeetCode\Easy;

class Solution
{
    public function reverse(int $x): int
    {
        preg_match_all('/\d/', $x, $numbers);
        $numbers = current($numbers);

        if ($x < 0) {
            $numbers[] = '-';
        }

        $numbers = implode('', array_reverse($numbers));

        // check if it's not overflow 32 bit
        return (abs($numbers) & 0x7FFFFFFF) === abs($numbers)
            ? $numbers
            : 0;
    }
}
