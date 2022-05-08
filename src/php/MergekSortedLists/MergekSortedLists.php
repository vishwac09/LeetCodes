<?php

/**
 * Autogenerated file for problem MergekSortedLists
 */

namespace LeetCode\Problems\MergekSortedLists;

use LeetCode\Problems\Helpers\ListNode;

class MergekSortedLists
{
    /**
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $values = [];
        $total = 0;
        foreach ($lists as $listNode) {
            $list = $listNode;
            while ($list != null) {
                $values[] = $list->val;
                $total++;
                $list = $list->next;
            }
        }
        sort($values);
        $head = $n = new ListNode($values[0]);
        for ($i=1; $i<$total; $i++) {
            $n->next = new ListNode($values[$i]);
            $n = $n->next;
        }
        return $head;
    }
}
