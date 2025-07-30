function binarySubtreeToArray(root){
    if(root === null) return [];

    const result = [];
    const queue = [root];

    while(queue.length > 0){
        const current = queue.shift();

        if(current === null){
            result.push(null);
            continue;
        }

        result.push(current.data);
        queue.push(current.left);
        queue.push(current.right);
    }

    while(result.length > 0 && result[result.length - 1] === null){
        result.pop();
    }
        
    return result;
}

module.exports = binarySubtreeToArray;