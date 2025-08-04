function inorderTraversal(root){
    return inorderTraversalHelper(root, []);
}

function inorderTraversalHelper(node, arr){
    if(node === null) return;
    
    inorderTraversalHelper(node.left, arr);
    arr.push(node.data);
    inorderTraversalHelper(node.right, arr);

    return arr;
}

module.exports = inorderTraversal;