function fireEmployees(employees, unemployed){
    // 残留社員を格納する配列
    let remaining = [];

    // employeesが空の場合
    if(employees.length === 0) return remaining;
    // unemployedが空の場合
    if(unemployed.length === 0) return employees;

    // 解雇対象者を連想配列に格納する
    let cache = [];
    for(let i = 0; i < unemployed.length; i++){
        if(cache[unemployed[i]] === undefined) cache[unemployed[i]] = unemployed[i];
    }

    // 従業員リストを連想配列と照らし合わせる
    for(let i = 0; i < employees.length; i++){
        if(cache[employees[i]] === undefined) remaining.push(employees[i]);
    }

    return remaining;
}

module.exports = fireEmployees;

// 他の方のコードより一部抜粋
// let hashmap = {};
// let results = [];

// for(let i = 0; i < unemployed.length; i++){
//     hashmap[unemployed[i]] = unemployed[i];
// }
