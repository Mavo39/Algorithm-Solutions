function decimalToBinary(decNumber){
    let bit = '';
    while(decNumber >= 1){
        bit = ((decNumber % 2 == 0) ? '0' : '1') + bit;
        decNumber = Math.floor(decNumber / 2);
    }
    return bit;
}

module.exports = decimalToBinary;