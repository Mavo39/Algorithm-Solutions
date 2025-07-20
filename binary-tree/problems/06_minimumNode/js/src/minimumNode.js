function minimumNode(root){
    if(root === null) return null;

    let currentNode = root;

    while(currentNode.left !== null){
        currentNode = currentNode.left;
    }

    return currentNode;
}