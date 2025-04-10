const validEmailList = require('./solution');

console.log(validEmailList(["ccc@aaa.com","c@cc@aaa.com","cc c@aaa.com","cc.c@aaa.com"]));
console.log(validEmailList(["c@cc@aaa.com","cc c@aaa.com","cc.c@aaacom"]));
console.log(validEmailList(["ccc@aaa.com","cvsd@a.com","tele@bb.aa","cc.c@aaa.com"]));
console.log(validEmailList(["c@cc@aaa.com","tele@bb.aa","cc.c@aaa.com","ccc@aaa.com"]));