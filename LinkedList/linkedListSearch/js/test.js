import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';
import { linkedListSearch } from './linkedListSearch.js';

// 1.
const list1 = new SinglyLinkedList([1,3,4,5]);
console.log(linkedListSearch(list1.head, 3));

// 2.
const list2 = new SinglyLinkedList([1,1,1,1]);
console.log(linkedListSearch(list2.head, 1));

// 3.
const list3 = new SinglyLinkedList([1,6,3,63,68,9,5]);
console.log(linkedListSearch(list3.head, 5));

// 4.
const list4 = new SinglyLinkedList([3,3,2,10,34,45,67,356]);
console.log(linkedListSearch(list4.head, 67));

// 5.
const list5 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
console.log(linkedListSearch(list5.head, -5));

// 6.
const list6 = new SinglyLinkedList([71,8,16,33]);
console.log(linkedListSearch(list6.head, 71));

// 7.
const list7 = new SinglyLinkedList([71,8,16,33]);
console.log(linkedListSearch(list7.head, 686));

// 8.
const list8 = new SinglyLinkedList([101,54,822,93,131,1800,99]);
console.log(linkedListSearch(list8.head, 1800));

// 9.
const list9 = new SinglyLinkedList([580,781]);
console.log(linkedListSearch(list9.head, 781));

// 10.
const list10 = new SinglyLinkedList([2,4,52,108]);
console.log(linkedListSearch(list10.head, 52));

// 11.
const list11 = new SinglyLinkedList([61,73,27,3001]);
console.log(linkedListSearch(list11.head, 45));