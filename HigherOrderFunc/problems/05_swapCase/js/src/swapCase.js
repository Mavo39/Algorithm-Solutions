function swapCase(charList){
        return charList.map(char => {
        if((/[a-z]/).test(char)) return char.toUpperCase();
        else if(/[A-Z]/.test(char)) return char.toLowerCase();
    });
}

module.exports = swapCase;