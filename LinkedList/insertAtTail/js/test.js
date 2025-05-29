import { Node } from './Node.js';
import { SinglyLinkedList } from './SinglyLinkedList.js';

const list1 = new SinglyLinkedList([3,3,2,10,34,45,67,356]);
list1.insertAtTail(367);
list1.printList();

const list2 = new SinglyLinkedList([3,3,2,10,34,45,67,356]);
list2.insertAtTail(4);
list2.printList();

const list3 = new SinglyLinkedList([3,8]);
list3.insertAtTail(4);
list3.printList();

const list4 = new SinglyLinkedList([3,32,2,10,34,45,67,356]);
list4.insertAtTail(46);
list4.printList();

const list5 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
list5.insertAtTail(75);
list5.printList();

const list6 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
list6.insertAtTail(96);
list6.printList();