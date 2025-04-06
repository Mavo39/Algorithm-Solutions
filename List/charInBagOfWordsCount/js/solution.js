function charInBagOfWordsCount(bagOfWords,keyCharacter){
    let count = 0;
    // 配列の要素が空 または 指定文字が空の場合
    if(bagOfWords.length == 0 || keyCharacter.length !== 1) return count;

    for(let i = 0; i < bagOfWords.length; i++){
        for(let j = 0; j < bagOfWords[i].length; j++){
            if(bagOfWords[i][j] === keyCharacter) count++;
        }
    }
    return count;
}

module.exports = charInBagOfWordsCount;