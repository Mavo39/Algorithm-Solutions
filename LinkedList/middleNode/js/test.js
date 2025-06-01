import { Node } from '../../Common/js/Node.js';
import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';
import { MiddleNodeLinkedList } from './MiddleNodeLinkedList.js';

const list1 = new MiddleNodeLinkedList([1,2]);
const midNode1 = list1.middleNode();
list1.printList(midNode1);

const list2 = new MiddleNodeLinkedList([1,2,3,4,5,6,7]);
const midNode2 = list2.middleNode();
list2.printList(midNode2);

const list3 = new MiddleNodeLinkedList([1,2,3,4,5,6,7,8]);
const midNode3 = list3.middleNode();
list3.printList(midNode3);

const list4 = new MiddleNodeLinkedList([14,35,8,4,97,33,53,68,23,1,84]);
const midNode4 = list4.middleNode();
list4.printList(midNode4);