// リファクタリング後のコード
export function dailyStockPrice(stocks) {
    const n = stocks.length;
    const resArr = new Array(n).fill(0);
    const stack = [];

    for (let i = n - 1; i >= 0; i--) {
        const currentPrice = stocks[i];

        while (stack.length > 0) {
            const topIndex = stack[stack.length - 1];
            const topPrice = stocks[topIndex];

            if (topPrice <= currentPrice) {
                stack.pop();
            } else {
                break;
            }
        }

        if (stack.length > 0) {
            // stack[stack.length - 1]: スタックの末尾
            resArr[i] = stack[stack.length - 1] - i;
        }

        stack.push(i);
    }

    return resArr;
}

// 自分が最初に書いたコード
// export function dailyStockPrice(stocks){
//     let stack = [];
//     let resArr = [];

//     for (let i = stocks.length - 1; i >= 0; i--) {
//         const currentPrice = stocks[i];

//         while (stack.length > 0) {
//             const stackTopIndex = stack[stack.length - 1];
//             const stackTopPrice = stocks[stackTopIndex];

//             if (stackTopPrice <= currentPrice) {
//                 stack.pop();
//             } else {
//                 break;
//             }
//         }

//         if (stack.length === 0) {
//             resArr.unshift(0);
//         } else {
//             const stackTopIndex = stack[stack.length - 1];
//             resArr.unshift(stackTopIndex - i);
//         }

//         stack.push(i);
//     }

//     return resArr;
// }