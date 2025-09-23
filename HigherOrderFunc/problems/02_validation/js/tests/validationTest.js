const { doesNotStartAtWithAt, doesNotHaveSpace, hasUppercaseAndLowercase, emailValidation } = require('../src/validation.js');

const tests = {
    "case1" : {
        "input" : {
            "validator" : doesNotStartAtWithAt,
            "email" : "@gmail.com"
        },
        "output" : "Email is not correct."
    }, 
    "case2" : {
        "input" : {
            "validator" : doesNotStartAtWithAt,
            "email" : "kkk@gmail.com"
        },
        "output" : "Email is correct."
    },
    "case3" : {
        "input" : {
            "validator" : doesNotHaveSpace,
            "email" : "Hello world"
        },
        "output" : "Email is not correct."
    },
    "case4" : {
        "input" : {
            "validator" : doesNotHaveSpace,
            "email" : "Helloworld"
        },
        "output" : "Email is correct."
    },
    "case5" : {
        "input" : {
            "validator" : hasUppercaseAndLowercase,
            "email" : "hello world"
        },
        "output" : "Email is not correct."
    },
    "case6" : {
        "input" : {
            "validator" : hasUppercaseAndLowercase,
            "email" : "HELLO WORLD"
        },
        "output" : "Email is not correct."
    },
    "case7" : {
        "input" : {
            "validator" : hasUppercaseAndLowercase,
            "email" : "Hello world"
        },
        "output" : "Email is correct."
    },
    "case8" : {
        "input" : {
            "validator" : hasUppercaseAndLowercase,
            "email" : ""
        },
        "output" : "Email is not correct."
    }
}

for(const [key, test] of Object.entries(tests)){
    const { validator, email } = test.input;
    const output = emailValidation(validator, email);
    const expected = test.output;
    const result = (output === expected) ? "Success" : "Failure";

    console.log(`Test ${key}: ${result}`);
}