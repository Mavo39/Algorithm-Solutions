import { SinglyLinkedList } from "../../Common/js/SinglyLinkedList.js"; 
import { linkedListLength } from "./linkedListLength.js";

// 1.
const list1 = new SinglyLinkedList([3,2,1,5,6,4]);
console.log(linkedListLength(list1.head));

// 2.
const list2 = new SinglyLinkedList([7,8,2,3,1,7,8,11,4,3,2]);
console.log(linkedListLength(list2.head));

// 3.
const list3 = new SinglyLinkedList([34,35,64,34,10,2,14,5,353,23,35,63,23]);
console.log(linkedListLength(list3.head));

// 4.
const list4 = new SinglyLinkedList([1]);
console.log(linkedListLength(list4.head));