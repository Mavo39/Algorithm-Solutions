function hasPenalty(records){
    // recordsが空だった場合
    if(records.length <= 0) return true;

    // trueになる場合を選別するためのループ
    for(let i = 1; i < records.length; i++){
        let prevRecords = records[i-1];
        let currRecords = records[i];
        if(prevRecords > currRecords) return true;
    }

    return false;
}

module.exports = hasPenalty;