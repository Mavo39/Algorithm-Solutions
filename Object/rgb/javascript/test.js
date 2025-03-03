const RGB = require('./solution');

let color1 = new RGB(0, 153, 255);
console.log(color1.getHexCode());
console.log(color1.getBits());
console.log(color1.getColorShade());

let color2 = new RGB(255, 255, 204);
console.log(color2.getHexCode());
console.log(color2.getBits());
console.log(color2.getColorShade());

let color3 = new RGB(0, 87, 0);
console.log(color3.getHexCode());
console.log(color3.getBits());
console.log(color3.getColorShade());

let gray = new RGB(123, 123, 123);
console.log(gray.getHexCode());
console.log(gray.getBits());
console.log(gray.getColorShade());