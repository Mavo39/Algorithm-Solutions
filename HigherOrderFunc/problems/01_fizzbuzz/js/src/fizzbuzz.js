let fizzbuzz = n => {
    let resStr = "";

    for(let i = 1; i <= n; i++){
        if(i % 15 === 0) resStr += "-FizzBuzz";
        else if(i % 5 === 0) resStr += "-Buzz";
        else if(i % 3 === 0) resStr += "-Fizz";
        else resStr += `-${i}`;
    }

    return resStr.slice(1);
}

module.exports = fizzbuzz;