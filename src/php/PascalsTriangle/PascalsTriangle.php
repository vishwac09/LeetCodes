<?php

/**
 * Autogenerated file for problem PascalsTriangle
 */

namespace LeetCode\Problems\PascalsTriangle;

class PascalsTriangle
{
    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $pascal[] = [];
        for ($i=0; $i<$numRows; $i++) {
            for ($j=0; $j<=$i; $j++) {
                if ($j === 0 || $j === $i) {
                    $pascal[$i][] = 1;
                }
                else {
                    $pascal[$i][] = $pascal[$i-1][$j - 1] + $pascal[$i-1][$j];
                }
            }
        }
        return $pascal;
    }
}