function validEmailList(emailList){
    let res = [];
    if(emailList.length <= 0) return res;

    for(let i = 0; i < emailList.length; i++){
        if(validEmail(emailList[i])) res.push(emailList[i]);
    }
    return res;
}

// 正規表現を使って文字列を検証
function validEmail(email){
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

module.exports = validEmailList;