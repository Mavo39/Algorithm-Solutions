function countNodes(root){
    let count = 0;

    if(root === null) return count;

    let queue = [root];

    while(queue.length > 0){
        const currentNode = queue.shift();
        count++;

        if(currentNode.left !== null){
            queue.push(currentNode.left);
        }

        if(currentNode.right !== null){
            queue.push(currentNode.right);
        }
    }

    return count;
}