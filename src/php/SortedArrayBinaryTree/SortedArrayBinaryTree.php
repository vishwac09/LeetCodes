<?php

/**
 * Autogenerated file for problem SortedArrayBinaryTree
 */

namespace LeetCode\Problems\SortedArrayBinaryTree;

use LeetCode\Problems\Helpers\TreeNode;

class SortedArrayBinaryTree
{
    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        $totalElem = count($nums);
        if ($totalElem == 1)
            return new TreeNode($nums[0]);
        return $this->buildTrees($nums, 0, $totalElem - 1);
    }
    
    function buildTrees($nums, $left, $right) {
        if ($left > $right)
            return null;
        $mid = floor(($left+$right)/2);
        $head = new TreeNode($nums[$mid]);
        $head->left = $this->buildTrees($nums, $left, $mid-1);
        $head->right = $this->buildTrees($nums, $mid+1, $right);
        return $head;
    }
}
