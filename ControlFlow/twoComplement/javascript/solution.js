function twosComplement(bits){
    let twoComplement = onesComplement(bits);
    let carryOut = false;

    for(let i = bits.length-1; i >= 0; i--){
        if(twoComplement[i] == "0"){
            twoComplement = twoComplement.slice(0, i) + "1" + twoComplement.slice(i+1);
            carryOut = false;
            break;
        } else {
            twoComplement = twoComplement.slice(0, i) + "0" + twoComplement.slice(i+1);
            carryOut = true;
        }
    }
    return carryOut ? "1" + twoComplement : twoComplement;
}

function onesComplement(bits){
    let res = '';
    for(let i = 0; i < bits.length; i++){
        res += bits[i] == 0 ? "1" : "0";
    }
    return res;
}

module.exports = twosComplement;