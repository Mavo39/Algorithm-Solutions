function longestPalindromeLength(string){
    let hashmap = {};
    let count = 0;

    for (let i = 0; i < string.length; i++) {
        hashmap[string[i]] = (hashmap[string[i]] || 0) + 1;

        if (hashmap[string[i]] % 2 === 0) {
            count += 2;
        }
    }

    return string.length > count ? count + 1 : count;
}

module.exports = longestPalindromeLength;

// 自作のコード
// function longestPalindromeLength(string){
//     if(string.length === 0) return [];

//     let hashmap = {};
//     let count = 0;

//     for(let i = 0; i < string.length; i++){
//         if(hashmap[string[i]] === undefined) hashmap[string[i]] = 1;
//         else hashmap[string[i]]++;
//     }

//     let keys = Object.keys(hashmap);
//     for(let i = 0; i < keys.length; i++){
//         if(hashmap[keys[i]] % 2 === 0) count += 2;
//     }

//     return string.length !== count ? count + 1 : count;
// }