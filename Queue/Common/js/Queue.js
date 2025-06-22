const  Node = require('./Node.js');

class Queue {
    constructor(){
        this.head = null;
        this.tail = null;
    }

    peekFront(){
        if(this.head === null) return null;

        return this.head.data;
    }

    peekBack(){
        if(this.tail === null) return null;

        return this.tail.data;
    }

    enqueue(data){
        if(this.head === null){
            this.head = new Node(data);
            this.tail = this.head;
        }
        else {
            this.tail.next = new Node(data);
            this.tail = this.tail.next;
        }
    }

    dequeue(){
        if(this.head === null) return null;

        const temp = this.head;
        this.head = this.head.next;

        if(this.head === null){
            this.tail = null;    
        }

        return temp.data;
    }
}

module.exports = Queue;