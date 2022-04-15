<?php

/**
 * Autogenerated file for problem Number1Bits
 */

namespace LeetCode\Problems\Number1Bits;

class Number1Bits
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $count = 0;
        while ($n != 0) {
            if ($n & 1 == 1) {
                $count++;
            }
            $n = $n >> 1;
        }
        return $count;
    }
}