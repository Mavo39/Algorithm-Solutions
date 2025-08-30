function minDepth(root){
    if(root == null) return 0;

    queue = [root];

    let currentNode = root;
    let level = 0;

    while(queue.length > 0){
        const length = queue.length;
        for(let i = 1; i <= length; i++){
            currentNode = queue.shift();

        }
    }
}