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
        this.next = next;
    }

    getTotalPrice(){
        return this.product.price * this.quantity;
    }
}

class Invoice{
    constructor(invoiceNumber, invoiceItemHead){
        this.invoiceNumber = invoiceNumber;
        this.invoiceItemHead = invoiceItemHead;
    }

    amountDue(taxes){
        let totalPayment = 0;
        let currentList = this.invoiceItemHead;
        const CONSUMPTION_TAX = 0.1;

        while(currentList != null){
            totalPayment += currentList.getTotalPrice();
            currentList = currentList.next;
        }

        return taxes ? totalPayment * (1 + CONSUMPTION_TAX) : totalPayment;
    }
}

module.exports = {
    Product: Product,
    InvoiceItem: InvoiceItem,
    Invoice: Invoice
}