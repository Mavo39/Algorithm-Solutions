const Node = require('./Node.js');

class Deque {
    constructor(){
        this.head = null;
        this.tail = null;
    }

    peekFront(){
        if(this.head === null){
            return null;
        }

        return this.head.data;
    }

    peekBack(){
        if(this.tail === null){
            return null;
        }

        return this.tail.data;
    }

    enqueueFront(data){
        if(this.head === null){
            this.head = new Node(data);
            this.tail = this.head;
        }
        else {
            let newHeadNode = new Node(data);
            newHeadNode.next = this.head;
            this.head.prev = newHeadNode;
            this.head = newHeadNode;
        }
    }

    enqueueBack(data){
        if(this.tail === null){
            this.tail = new Node(data);
            this.head = this.tail;
        }
        else {
            let newTailNode = new Node(data);
            newTailNode.prev = this.tail;
            this.tail.next = newTailNode;
            this.tail = newTailNode;
        }
    }

    dequeueFront(){
        if(this.head === null){
            return null;
        }

        const temp = this.head;
        this.head = this.head.next;
        if(this.head === null){
            this.tail = null;
            return null;
        }

        return temp.data;
    }

    dequeueBack(){
        if(this.tail === null){
            return null;
        }

        const temp = this.tail;
        this.tail = this.tail.prev;
        if(this.tail === null){
            this.head = null;
            return null;
        }

        return temp.data;
    }
}

module.exports = Deque;