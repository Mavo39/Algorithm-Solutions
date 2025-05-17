function findPairs(numbers){
    let res = [];

    if(numbers.length === 0) return res;

    let hashmap = {};
    for(let i = 0; i < numbers.length; i++){
        if(hashmap[numbers[i]] === undefined) hashmap[numbers[i]] = 1;
        else hashmap[numbers[i]]++;
    }

    let keys = Object.keys(hashmap);
    for(let i = 0; i < keys.length; i++){
        if(hashmap[keys[i]] === 2) res.push(keys[i]);
    }

    return res.sort((a,b) => a - b);
}

module.exports = findPairs;