import { Queue } from './Queue.js';

const q = new Queue();
q.enqueue(4);
console.log(q.peekFront());
console.log(q.peekBack());
q.enqueue(50);
console.log(q.peekFront());
q.peekBack();
q.enqueue(64);
console.log(q.peekFront());
console.log(q.peekBack());
q.dequeue();