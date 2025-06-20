export function dailyStockPrice(stocks){
    if(stocks.length === 0) return [];

    let stack = [];
    let resArr = [];

    for (let i = stocks.length - 1; i >= 0; i--) {
        const currentPrice = stocks[i];

        while (stack.length > 0) {
            const stackTopIndex = stack[stack.length - 1];
            const stackTopPrice = stocks[stackTopIndex];

            if (stackTopPrice <= currentPrice) {
                stack.pop();
            } else {
                break;
            }
        }

        if (stack.length === 0) {
            resArr.unshift(0);
        } else {
            const stackTopIndex = stack[stack.length - 1];
            resArr.unshift(stackTopIndex - i);
        }

        stack.push(i);
    }

    return resArr;
}