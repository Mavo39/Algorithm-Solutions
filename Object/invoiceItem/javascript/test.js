const { Product, InvoiceItem } = require('./solution');

let product1 = new Product ("shampoo", 10);
let product2 = new Product ("conditioner", 5);
let product3 = new Product ("tooth brush", 3);

let firstItem = new InvoiceItem(product1, 7);
let secondItem = new InvoiceItem(product2, 9);
let thirdItem = new InvoiceItem(product3, 10);

firstItem.next = secondItem;
secondItem.next = thirdItem;

console.log(firstItem.getTotalPrice());
console.log(secondItem.getTotalPrice());
console.log(firstItem.next.getTotalPrice());
console.log(firstItem.next.next.getTotalPrice());
console.log(firstItem.next.product.price);
console.log(firstItem.next.next.product.title);