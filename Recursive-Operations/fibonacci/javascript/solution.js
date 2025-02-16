// 反復
function fibonacci(n){
    let f1 = 0;
    let f2 = 1;
    for(let i = 0; i < n; i++){
        newF1 = f1 + f2;
        f1 = f2;
        f2 = newF1;
    }
    return f1;
}

// 再帰
// O(n)
// function fibonacci(n){
//     return fibonacciHelper(0, 1, n);   
// }

// function fibonacciHelper(f1, f2, count){
//     if(count == 0) return f1;
//     return fibonacciHelper(f2, f1 + f2, count - 1);
// }

// O(2^n)
// function fibonacci(n){
//     if(n == 0) return 0;
//     else if(n == 1) return 1;
//     return fibonacci(n-1) + fibonacci(n-2);   
// }

module.exports = fibonacci;