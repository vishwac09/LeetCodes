<?php

/**
 * Autogenerated file for problem SumLeftLeaves
 */

namespace LeetCode\Problems\SumLeftLeaves;

class SumLeftLeaves
{
    protected $sum = 0;
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumOfLeftLeaves($root) {
        if (!$root)
            return 0;
        $this->parseTree($root, false);
        return $this->sum;
    }
    
    function parseTree($root, $flag = false) {
        if (!is_null($root)) {
            if ($flag && !$root->left && !$root->right) {
                $this->sum += $root->val;
            }
        }
        if (isset($root->left))
            $this->parseTree($root->left, true);
        if (isset($root->right))
            $this->parseTree($root->right, false);
    }
}