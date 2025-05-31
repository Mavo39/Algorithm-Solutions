import { Node } from '../../Common/js/Node.js';
import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';
import { MiddleNodeLinkedList } from './MiddleNodeLinkedList.js';

const list1 = new SinglyLinkedList([1,2]);
const res1 = MiddleNodeLinkedList.middleNode(list1);
MiddleNodeLinkedList.printNode(res1);