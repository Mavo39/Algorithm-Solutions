function missingItems(listA, listB){
    let lengthA = listA.length; // なくてもいい
    let lengthB = listB.length;  // なくてもいい

    let res = [];

    if(lengthA === 0) return res;
    if(lengthB === 0) return listA;

    let hashmap = {};
    for(let i = 0; i < lengthB; i++){
        if(hashmap[listB[i]] === undefined) hashmap[listB[i]] = listB[i];
    }

    for(let i = 0; i < lengthA; i++){
        if(hashmap[listA[i]] === undefined) res.push(listA[i]);
    }

    return res;
}

module.exports = missingItems;