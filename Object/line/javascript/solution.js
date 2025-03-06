class Point{
    constructor(x, y){
        this.x = x;
        this.y = y;
    }
}

class Line{
    constructor(startPoint, endPoint){
        this.startPoint = startPoint;
        this.endPoint = endPoint;
    }

    getLength(){
        let distX = Math.abs(this.startPoint.x - this.endPoint.x);
        let distY = Math.abs(this.startPoint.y - this.endPoint.y);
        return Math.sqrt(Math.pow(distX, 2) + Math.pow(distY, 2));
    }
}

module.exports = {Point, Line};