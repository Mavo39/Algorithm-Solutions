class Product{
    constructor(title, price){
        this.title = title;
        this.price = price;
    }
}

class InvoiceItem{
    constructor(product, quantity, next){
        this.product = product;
        this.quantity = quantity;
        this.next = null;
    }

    getTotalPrice(){
        return this.product.price * this.quantity;
    }
}

module.exports = {
    Product: Product,
    InvoiceItem: InvoiceItem
};