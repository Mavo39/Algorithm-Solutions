function reverseInorderTraversal(root){
    return reverseInorderTraversalHelper(root, []);
}

function reverseInorderTraversalHelper(root, arr){
    if(root === null) return arr;

    reverseInorderTraversalHelper(root.right);
    arr.push(root.data);
    reverseInorderTraversalHelper(root.left);

    return arr;
}

module.exports = reverseInorderTraversal;