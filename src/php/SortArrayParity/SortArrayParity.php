<?php

/**
 * Autogenerated file for problem SortArrayParity
 */

namespace LeetCode\Problems\SortArrayParity;

class SortArrayParity
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $parityEven = [];
        $parityOdd = [];
        foreach ($nums as $key => $value) {
            if ($value % 2 == 0) {
                $parityEven[] = $value;
            } else {
                $parityOdd[] = $value;
            }
        }
        return array_merge($parityEven, $parityOdd);
    }
}