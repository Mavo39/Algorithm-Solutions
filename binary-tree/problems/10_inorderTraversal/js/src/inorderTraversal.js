function inorderTraversal(root){
    return inorderTraversalHelper(root, []);
}

function inorderTraversalHelper(node, arr){
    if(node === null) return null;
    
    if(node !== null){
        inorderTraversalHelper(node.left);
        arr.push(node.data);
        inorderTraversalHelper(node.right);
    }
    return arr;
}

module.exports = inorderTraversal;