<?php

/**
 * Autogenerated file for problem PathSum
 */

namespace LeetCode\Problems\PathSum;

use LeetCode\Tests\Helpers\TreeNode;

class PathSum
{
    /**
     * @param TreeNode $root
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum) {
        if (!$root) {
            return false;
        }
        return $this->parsePath($root, $targetSum, $root->val);
    }
    
    function parsePath($root, $target, $sum) {
        if ($root->left != null) {
            $op  = $this->parsePath($root->left, $target, $root->left->val + $sum);
            if ($op) {
                return $op;
            }
        }
        if ($root->right != null) {
            $op = $this->parsePath($root->right, $target, $root->right->val + $sum);
            if ($op) {
                return $op;
            }
        }
        if ($sum == $target && $root->left == null & $root->right == null) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
