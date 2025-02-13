const middleSubstring = require("./solution");

console.log(middleSubstring("A")); // A
console.log(middleSubstring("AB")); // A
console.log(middleSubstring("ABC")); // B
console.log(middleSubstring("ABCD")); // BC
console.log(middleSubstring("ABCDE")); // BC
console.log(middleSubstring("ABCDEF")); // CDE
console.log(middleSubstring("ABCDEFG")); // CDE
console.log(middleSubstring("ABCDEFGH")); // CDEF
console.log(middleSubstring("ABCDEFGHI")); // CDEF
console.log(middleSubstring("ABCDEFGHIJ")); // DEFGH
console.log(middleSubstring("ABCDEFGHIJK")); // DEFGH
console.log(middleSubstring("ABCDEFGHIJKL")); // DEFGHI
console.log(middleSubstring("fundamental")); // damen