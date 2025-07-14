function bstSearch(root,key){
    let currentNode = root;

    while(currentNode !== null){
        if(currentNode.data === key){
            return currentNode;
        }

        if(currentNode.data > key){
            currentNode = currentNode.left;
        } else {
            currentNode = currentNode.right;
        }
    }

    return null;
}

module.exports = bstSearch;