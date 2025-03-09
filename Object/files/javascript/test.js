const Files = require('./solution');

let assignment = new Files("assignment", ".word", "ABCDEFGH", "homework");
console.log(assignment.getLifetimeBandwidthSize());
console.log(assignment.prependContent("MMM"));
console.log(assignment.addContent("hello world", 5));
console.log(assignment.showFileLocation());

let blade = new Files("blade", ".txt", "bg-primary text-white m-0 p-0 d-flex justify-content-center", "view");
console.log(blade.getLifetimeBandwidthSize());
console.log(blade.addContent("font-weight-bold ", 11));
console.log(blade.showFileLocation());