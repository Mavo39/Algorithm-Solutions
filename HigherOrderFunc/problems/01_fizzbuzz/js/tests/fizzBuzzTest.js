const fizzbuzz = require('../src/fizzbuzz.js')

const tests = {
   "case1" : {
       "input" : 9,
       "output" : "1-2-Fizz-4-Buzz-Fizz-7-8-Fizz"
   },
   "case2" : {
       "input" : 20,
       "output" : "1-2-Fizz-4-Buzz-Fizz-7-8-Fizz-Buzz-11-Fizz-13-14-FizzBuzz-16-17-Fizz-19-Buzz"
   }
};

for(let [key, value] of Object.entries(tests)){
    const res = fizzbuzz(value['input']);
    const finalResult = JSON.parse(res) === JSON.parse(value['output']) ? "True" : "False";
    console.log(`Test ${key}: ${finalResult}`);
}