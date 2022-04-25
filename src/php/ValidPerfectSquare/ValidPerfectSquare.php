<?php

/**
 * Autogenerated file for problem ValidPerfectSquare
 */

namespace LeetCode\Problems\ValidPerfectSquare;

class ValidPerfectSquare
{
    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        $r = $num;
        $flag = true;
        $isPS = false;
        $prev = 0;
        while ($flag) {
            $r = ($r + $num/$r)/2;
            if (floor($r)*floor($r) == $num) {
                $isPS = true;
                $flag= false;
            }
            if ($r == $prev) {
                break;
            }
            $prev = $r;
        }
        return $isPS;
    }
}