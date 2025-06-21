<?php 

require_once __DIR__ . '/../../../LinkedList/Common/php/SinglyLinkedList.php';
require_once __DIR__ . '/palindromeLinkedList.php';

use Common\SinglyLinkedList;

function testPalindromeLinkedList(array $values): string {
    $list = new SinglyLinkedList($values);
    return palindromeLinkedList($list->head) ? "true" : "false";
}

// 1.
echo testPalindromeLinkedList([1,2,3]) . PHP_EOL;

// 2.
echo testPalindromeLinkedList([1,2]) . PHP_EOL;

// 3.
echo testPalindromeLinkedList([1,0,1]) . PHP_EOL;

// 4.
echo testPalindromeLinkedList([3,4,4,3,6]) . PHP_EOL;

// 5.
echo testPalindromeLinkedList([3,6,4,4,3,6]) . PHP_EOL;

// 6.
echo testPalindromeLinkedList([3,6,4,4,6,3]) . PHP_EOL;

// 7.
echo testPalindromeLinkedList([1,2,3,2,1]) . PHP_EOL;