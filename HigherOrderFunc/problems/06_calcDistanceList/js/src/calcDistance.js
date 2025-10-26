function calcDistanceList(pointList){
    return pointList.map(point => Math.abs(parseInt(point)));
}