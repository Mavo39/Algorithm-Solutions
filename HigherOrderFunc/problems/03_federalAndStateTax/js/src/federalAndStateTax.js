const stateTaxRate = {
    "Arizona" : 0.049,
    "California" : 0.088,
    "Northcarolina" : 0.025
};

let getFederalTaxAmount = income => income * 0.21;

let getStateTaxAmount = (income, state) => income * stateTaxRate[state];

let getTotalTaxAmount = (income, state) => {
    const federalTaxAmount = getFederalTaxAmount(income);
    const stateTaxAmount = getStateTaxAmount(income, state);
    return federalTaxAmount + stateTaxAmount;
};

let printTaxByState = state => income => {
    console.log(`Federal Tax: ${getFederalTaxAmount(income)}\n${state} State Tax: ${getStateTaxAmount(income, state)}\nTax Amount: ${getTotalTaxAmount(income, state)}`);
}

module.exports = printTaxByState;