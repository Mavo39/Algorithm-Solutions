class Card {
    constructor(suit, value, intValue){
        this.suit = suit;
        this.value = value;
        this.intValue = intValue;
    }
}

function printCardArray(cardArray){
    for(let i = 0; i < cardArray.length; i++){
        let current = cardArray[i];
        console.log(current.suit + current.value + "(" + current.intValue + ")");
    }
}

module.exports.Card = Card;
module.exports.printCardArray = printCardArray;