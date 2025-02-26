function oneComplement(bits){
    let output = '';
    for(let i = 0; i < bits.length; i++){
        output += (bits[i] == 0 ? "1" : "0");
        // 別表現
        // bits[i] == '0' ? output += '1' : output += '0';
    }
    return output;
}

module.exports = oneComplement;