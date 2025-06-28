function stockSpan(stocks){
    let stack = [];
    let results = [];

    for(let i = 0; i < stocks.length; i++){
        const currentStock = stocks[i];
        let consecutiveDays = 1;

        while(stack.length > 0 && stocks[stack[stack.length - 1]] < currentStock){
            consecutiveDays += results[stack.pop()];
        }

        results.push(consecutiveDays);
        stack.push(i);
    }

    return results;
}

module.exports = stockSpan;