const Deque = require('../../../../src/js/Deque/Deque.js');

function testDequeOutput(expected, output){
    if(expected === output){
        console.log("True");
    } else {
        console.log("False");
    }
}

let q = new Deque();
q.enqueueBack(4);
q.enqueueBack(50);
testDequeOutput(4, q.peekFront());
testDequeOutput(50, q.peekFront());
q.enqueueFront(36)
q.enqueueFront(96)
testDequeOutput(96, q.peekFront());
testDequeOutput(50, q.peekBack());
testDequeOutput(50, q.dequeueBack());
testDequeOutput(4, q.dequeueBack());
testDequeOutput(96, q.peekFront());
testDequeOutput(36, q.peekBack());
q.enqueueFront(20);
testDequeOutput(36, q.dequeueBack());