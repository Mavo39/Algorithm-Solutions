const BinaryTree = require('./BinaryTree.js');

function toBinaryTree(arr){
    let l = arr.length;
    if(l === 0 || arr[0] === null) return null;

    let root = new BinaryTree(arr[0]);
    let queue = [root];
    let i = 1;

    while(i < l){
        let current = queue.shift();

        // 左の子
        if(i < l && arr[i] !== null){
            let left = new BinaryTree(arr[i]);
            current.left = left;
            queue.push(left);
        }
        i++;

        // 右の子
        if(i < l && arr[i]!== null){
            let right = new BinaryTree(arr[i]);
            current.right = right;
            queue.push(right);
        }
        i++;
    }

    return root;
}

module.exports = toBinaryTree;