function binarySubtreeToArray(root){
    if(root === null){
        return [];
    }

    const result = [];
    const queue = [root];

    while(queue.length > 0){
        const current = queue.shift();
        result.push(current.data);

        if(current.left !== null){
            queue.push(current.left);
        } else {
            result.push(null);
        }
        
        if(current.right !== null){
            queue.push(current.right);
        } else {
            result.push(null);
        }
    }

    while(result.length > 0 && result[result.length - 1] === null){
        result.pop();
    }
        
    return result;
}