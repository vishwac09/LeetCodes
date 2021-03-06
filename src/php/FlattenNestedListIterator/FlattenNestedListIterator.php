<?php

/**
 * Autogenerated file for problem FlattenNestedListIterator
 */

namespace LeetCode\Problems\FlattenNestedListIterator;

class FlattenNestedListIterator
{
    protected $bucket, $entries, $pointer;
    /**
     * @param NestedInteger[] $nestedList
     */
    function __construct($nestedList) {
        $this->bucket = [];
        $this->entries = -1;
        $this->pointer = 0;
        foreach ($nestedList as $key => $list)
            $this->flattenArray($list);
    }
    
    function flattenArray($list) {
        if ($list->isInteger()) {
            $this->bucket[] = $list->getInteger();
            $this->entries++;
        } else {
            foreach ($list->getList() as $val)
                $this->flattenArray($val);
        }
    }
    
    /**
     * @return Integer
     */
    function next() {
        return $this->bucket[$this->pointer++];
    }
    
    /**
     * @return Boolean
     */
    function hasNext() {
        return $this->pointer <= $this->entries;
    }
}
