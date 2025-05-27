import { doubleEvenNumber } from "./function.js"; 
import { SinglyLinkedList } from "./SinglyLinkedList.js";

const list1 = new SinglyLinkedList([3,2,1,5,6,4]);
doubleEvenNumber(list1.head);
console.log();

const list2 = new SinglyLinkedList([3]);
doubleEvenNumber(list2.head);
console.log();

const list3 = new SinglyLinkedList([3,1]);
doubleEvenNumber(list3.head);
console.log();

const list4 = new SinglyLinkedList([3,1,5]);
doubleEvenNumber(list4.head);
console.log();
