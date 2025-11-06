function calcDistanceList(pointList){
    return pointList.map(str => {
        const strArr = str.split("-");
        const res = Math.abs(strArr[0] - strArr[1]);
        return res;
    });
}

module.exports = calcDistanceList;
