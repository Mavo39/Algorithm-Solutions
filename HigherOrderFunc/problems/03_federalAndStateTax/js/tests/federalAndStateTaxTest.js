const printTaxByState = require('../src/federalAndStateTax.js');

const getTaxInAZ = printTaxByState("Arizona");
const getTaxInCA = printTaxByState("California");
const getTaxInNC = printTaxByState("Northcarolina");

getTaxInAZ(400000);
getTaxInCA(100000);
getTaxInNC(500000);