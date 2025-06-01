import { Node } from '../../Common/js/Node.js';
import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';

export class MiddleNodeLinkedList extends SinglyLinkedList {
    middleNode(){
        let iterator = this.head;
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
        let str = '';

        while(iterator.next !== null){
            str += iterator.data + '➡';
            iterator = iterator.next;
        }
        str += iterator.data;

        console.log(str);
    }
}

// fast-slow(他の方のコードからの学び)
// middleNode(){
//     let slow = this.head; // 通常の速度で進む
//     let fast = this.head; // 2倍の速度で進む

//     while (fast != null && fast.next != null) {
//         fast = fast.next.next;   // 次の次のノードへ
//         slow = slow.next;        // 次のノードへ
//     }

//     return slow;
// }