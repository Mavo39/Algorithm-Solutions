export function printListFromNode(node){
    if(node === null){
        console.log(null);
        return;
    }
    
    let str = '';
    let current = node;
            
    while(current !== null){
        str += current.data;
        if(current.next !== null){
            str += '➡';
        }
        current = current.next;
    }

    console.log(str);
}