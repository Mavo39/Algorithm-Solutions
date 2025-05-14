function findXTimes(teams){
    if(teams.length === 0) return false;

    let hashmap = {};
    for(let i = 0; i < teams.length; i++){
        if(hashmap[teams[i]] === undefined) hashmap[teams[i]] = 1;
        else hashmap[teams[i]]++;
    }

    let keys = Object.keys(hashmap);
    for(let i = 1; i < keys.length; i++){
        if(hashmap[keys[i-1]] !== hashmap[keys[i]]) return false;
    }
    return true;
}

module.exports = findXTimes;