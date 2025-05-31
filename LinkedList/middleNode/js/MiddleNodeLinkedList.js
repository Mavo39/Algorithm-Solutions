import { Node } from '../../Common/js/Node.js';
import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';

export class MiddleNodeLinkedList extends SinglyLinkedList {
    middleNode(list){
        let iterator = list.head;
        let count = 0;
        
        while(iterator !== null){
            count++;
            iterator = iterator.next;
        }

        const middle = Math.floor(count / 2);
        iterator = this.head;

        for(let i = 0; i < middle; i++){
            iterator = iterator.next;
        }

        return iterator;
    }

    // オーバーライド
    printList(node){
        let iterator = node;
        str = '';

        while(iterator.next !== null){
            str += iterator.data + '➡';
            iterator = iterator.next;
        }
        str += iterator.data;

        console.log(str);
    }
}