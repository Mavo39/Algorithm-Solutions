import { reverseLinkedList, printFromNode } from './ReverseLinkedList.js';
import { Node } from '../../Common/js/Node.js';
import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';

const list1 = new SinglyLinkedList([3,2,1,5,6,4]);
const res1 = reverseLinkedList(list1.head);
printFromNode(res1);

const list2 = new SinglyLinkedList([3]);
const res2 = reverseLinkedList(list2.head);
printFromNode(res2);

const list3 = new SinglyLinkedList([3,1]);
const res3 = reverseLinkedList(list3.head);
printFromNode(res3);

const list4 = new SinglyLinkedList([3,1,5]);
const res4 = reverseLinkedList(list4.head);
printFromNode(res4);