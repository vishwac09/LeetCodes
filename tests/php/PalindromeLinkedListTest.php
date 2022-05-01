<?php

/**
 * Autogenerated test case file for problem PalindromeLinkedListTest
 */

use LeetCode\Problems\PalindromeLinkedList\PalindromeLinkedList;
use LeetCode\Problems\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

final class PalindromeLinkedListTest extends TestCase
{
	public function testPalindromeLinkedListTestExample1()
	{
        $a = new ListNode(1);
        $b = new ListNode(2);
        $c = new ListNode(2);
        $d = new ListNode(1);
        $a->next = $b;
        $b->next = $c;
        $c->next = $d;
        $pll = new PalindromeLinkedList();
        $this->assertEquals(true, $pll->isPalindrome($a));
	}
}