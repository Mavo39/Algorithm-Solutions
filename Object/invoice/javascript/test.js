const {Product, InvoiceItem, Invoice} = require('./solution');

let product1 = new Product ("shampoo", 10);
let product2 = new Product ("conditioner", 5);
let product3 = new Product ("tooth brush", 3);

let firstItem = new InvoiceItem(product1, 7);
let secondItem = new InvoiceItem(product2, 9);
let thirdItem = new InvoiceItem(product3, 10);

firstItem.next = secondItem;
secondItem.next = thirdItem;

let invoice = new Invoice ("UC1234567890", firstItem);
console.log(invoice.amountDue(false));
console.log(invoice.amountDue(true));