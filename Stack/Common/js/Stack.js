import { Item } from './Item.js';

class Stack {
    constructor(){
        this.head = null;
    }

    push(data){
        const temp = this.head;
        this.head = new Item(data);
        this.head.next = temp;
    }

    pop(){
        if(this.head === null) return null;

        const temp = this.head;
        this.head = this.head.next;

        return temp.data;
    }

    peek(){
        if(this.head === null) return null;

        return this.head.data;
    }
}