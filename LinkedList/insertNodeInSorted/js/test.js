import { Node } from '../../Common/js/Node.js';
import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';
import { printListFromNode } from '../../Common/js/linkedListUtils.js';
import { insertNodeInSorted } from './insertNodeInSorted';

// 1.
const list1 = new SinglyLinkedList([2,10,34,45,67,356]);
insertNodeInSorted(list1,3);

// 2.
const list2 = new SinglyLinkedList([2,10,34,45,67,356]);
insertNodeInSorted(list2,358);

// 3.
const list3 = new SinglyLinkedList([2,10,34,45,67,356]);
insertNodeInSorted(list3,-5);

// 4.
const list4 = new SinglyLinkedList([4,23,53,56,134,645]);
insertNodeInSorted(list4,34);