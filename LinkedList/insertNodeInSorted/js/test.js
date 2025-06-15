import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';
import { printListFromNode } from '../../Common/js/linkedListUtils.js';
import { insertNodeInSorted } from './insertNodeInSorted.js';

// 1.
const list1 = new SinglyLinkedList([2,10,34,45,67,356]);
printListFromNode(insertNodeInSorted(list1.head,3));

// 2.
const list2 = new SinglyLinkedList([2,10,34,45,67,356]);
printListFromNode(insertNodeInSorted(list2.head,358));

// 3.
const list3 = new SinglyLinkedList([2,10,34,45,67,356]);
printListFromNode(insertNodeInSorted(list3.head,-5));

// 4.
const list4 = new SinglyLinkedList([4,23,53,56,134,645]);
printListFromNode(insertNodeInSorted(list4.head,34));