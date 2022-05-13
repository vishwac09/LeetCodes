<?php

/**
 * Autogenerated file for problem PopulatingRightPointers
 */

namespace LeetCode\Problems\PopulatingRightPointers;

use LeetCode\Problems\Helpers\Node;

class PopulatingRightPointers
{
    /**
     * @param Node $root
     * @return Node
     */
    public function connect($root) {
        if (!$root)
            return null;
        $this->parseTree([$root]);
        return $root;
    }
    
    public function parseTree($items) {
        if (count($items) === 0)
            return;
        $prev = null;
        $next = [];
        foreach ($items as $item) {
            if (is_null($prev)) {
                $prev = $item;
            } else {
                $prev->next = $item;
            }
            $prev = $item;
            if (!is_null($item->left)) {
                $next[] = $item->left;
            }
            if (!is_null($item->right)) {
                $next[] = $item->right;
            }
        }
        unset($items);
        $this->parseTree($next);
    }
}