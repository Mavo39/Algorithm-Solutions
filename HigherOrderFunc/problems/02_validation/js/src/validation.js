const doesNotStartAtWithAt = email => email[0] != "@";
const doesNotHaveSpace = email => /\s/.test(email);
const hasUppercaseAndLowercase = email => /[a-z]/.test(email) && /[A-Z]/.test(email);

function emailValidation(f, email){
    return f(email) ? "Email is correct." : "Email is not correct.";
}

module.exports = { doesNotStartAtWithAt, doesNotHaveSpace, hasUppercaseAndLowercase, emailValidation }; 