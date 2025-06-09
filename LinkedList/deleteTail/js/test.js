import { Node } from '../../Common/js/Node.js';
import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';
import { printListFromNode } from '../../Common/js/linkedListUtils.js';
import { deleteTail } from './deleteTail.js';

// 1.
const list1 = new SinglyLinkedList([1]);
printListFromNode(deleteTail(list1.head));

// 2.
const list2 = new SinglyLinkedList([3,3,2,10,34,45,67,356]);
printListFromNode(deleteTail(list2.head));

// 3.
const list3 = new SinglyLinkedList([8,7,21,3,2,7]);
printListFromNode(deleteTail(list3.head));

// 4.
const list4 = new SinglyLinkedList([8,8,7,7,5]);
printListFromNode(deleteTail(list4.head));

// 5.
const list5 = new SinglyLinkedList([8,6,3,5,7]);
printListFromNode(deleteTail(list5.head));

// 6.
const list6 = new SinglyLinkedList([8,8,7,7,6,6,5,5,4,4]);
printListFromNode(deleteTail(list6.head));

// 7.
const list7 = new SinglyLinkedList([2,5,10,25,50]);
printListFromNode(deleteTail(list7.head));

// 8.
const list8 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
printListFromNode(deleteTail(list8.head));