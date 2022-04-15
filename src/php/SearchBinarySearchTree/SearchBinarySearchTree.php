<?php

/**
 * Autogenerated file for problem SearchBinarySearchTree
 */

namespace LeetCode\Problems\SearchBinarySearchTree;

use LeetCode\Tests\Helpers\TreeNode;

class SearchBinarySearchTree
{
    /**
     * @param TreeNode $root
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val) {
        if ($root == null) {
            return $root;
        }
        if ($root->left != null) {
            $op  = $this->searchBST($root->left, $val);
            if ($op instanceof TreeNode) {
                return $op;
            }
        }
        if ($root->right != null) {
            $op = $this->searchBST($root->right, $val);
            if ($op instanceof TreeNode) {
                return $op;
            }
        }
        if ($root->val == $val) {
            return $root;
        } else {
            return NULL;
        }
        
    }
}
