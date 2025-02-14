function calculateFinalMoney(interests,capital){
    return Math.floor(interests.reduce((total, interest) => total * (1 + (interest / 100)), capital));
}

module.exports = calculateFinalMoney;