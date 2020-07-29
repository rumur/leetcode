<?php

namespace LeetCode\Easy;

class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    public function twoSum(array $nums, int $target): array
    {
        $passed = [];

        foreach ($nums as $idx => $value) {

            $next_idx = $idx;

            while (isset($nums[++$next_idx])) {

                $next_value = $nums[$next_idx];

                $check_value = $value + $next_value;

                if ($target > $check_value) {
                    continue;
                }

                if ($target === $check_value) {
                    $passed[] = $idx;
                    $passed[] = $next_idx;
                    break 1;
                }
            }
        }

        return $passed;
    }
}