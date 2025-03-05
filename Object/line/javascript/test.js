const {Point, Line} = require('./solution');

let a = new Point(3, 1);
let b = new Point(3, 6);
let lineAB = new Line(a, b);
console.log(lineAB.getLength());

let c = new Point(1, 3);
let d = new Point(6, 15);
let lineCD = new Line(c, d);
console.log(lineCD.getLength());