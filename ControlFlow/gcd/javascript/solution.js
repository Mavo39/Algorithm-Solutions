// ①再帰
function gcd(m, n) {
    if ((m % n) == 0) {
        return n;
    }
    else return gcd(n, m % n);
}

// ②whileループ
function gcdWhileLoopIteration(n1, n2) {
    while(n1 % n2 != 0){
        let prevN1 = n1;
        n1 = n2;
        n2 = prevN1 % n2;
    }

    return n2;
}

// ③whileループ returnで制御
function gcdWhileLoopIterationReturn(n1, n2) {
    while(true){
        if(n1 % n2 == 0){
            return n2;
        }
        else{
            let prevN1 = n1;
            n1 = n2;
            n2 = prevN1 % n2;
        }
    }
}

// ④whileループ flag
function gcdWhileLoopIterationFlag(n1, n2) {
    let found = false;

    while(!found){
        if(n1 % n2 == 0) {
            found = true;
        }
        else{
            let prevN1 = n1;
            n1 = n2;
            n2 = prevN1 % n2;
        }
    }

    return n2;
}

module.exports = {
    func1 : gcd,
    func2 : gcdWhileLoopIteration,
    func3 : gcdWhileLoopIterationReturn,
    func4 : gcdWhileLoopIterationFlag
};