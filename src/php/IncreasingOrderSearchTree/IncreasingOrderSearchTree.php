<?php

/**
 * Autogenerated file for problem IncreasingOrderSearchTree
 */

namespace LeetCode\Problems\IncreasingOrderSearchTree;

use LeetCode\Problems\Helpers\TreeNode;

class IncreasingOrderSearchTree
{
    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function increasingBST($root)
    {
        if (!$root) {
            return null;
        }
        $parsedResult = $this->parseTree($root);
        return $this->createBST($parsedResult);
    }
    
    function parseTree($node = null) {
        $ret = [];
        // Get the Left childs
        if (isset($node->left)) {
            $temp = $this->parseTree($node->left);
            $ret = array_merge($ret, $temp);
        }
        if (isset($node)) {
            $ret[] = $node->val;
        }
        if (isset($node->right)) {
            $temp = $this->parseTree($node->right);
            $ret = array_merge($ret, $temp);
        }
        return $ret;
    }
    
    function createBST($list, $index = 0) {
        if (isset($list[$index])) {
            $node = $this->createBST($list, $index+1);
            return new TreeNode($list[$index], null,  $node);
        }
        return null;
    }
}
