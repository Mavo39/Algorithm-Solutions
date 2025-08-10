function reverseInorderTraversal(root){
    return reverseInorderTraversalHelper(root, []);
}

function reverseInorderTraversalHelper(root, arr){
    if(root === null) return arr;

    reverseInorderTraversalHelper(root.right, arr);
    arr.push(root.data);
    reverseInorderTraversalHelper(root.left, arr);

    return arr;
}

module.exports = reverseInorderTraversal;