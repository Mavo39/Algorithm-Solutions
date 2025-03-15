<?php

class Product{
    public string $title;
    public float $price;

    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }
}

class InvoiceItem{
    public Product $product;
    public int $quantity;
    public ?InvoiceItem $next;
    
    public function __construct($product, $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
        $this->next = null;
    }

    public function getTotalPrice(): float{
        return $this->product->price * $this->quantity;
    }
}

class Invoice{
    public string $invoiceNumber;
    public ?InvoiceItem $invoiceItemHead;

    public function __construct($invoiceNumber, $invoiceItemHead){
        $this->invoiceNumber = $invoiceNumber;
        $this->invoiceItemHead = $invoiceItemHead;
    }

    public function amountDue(bool $taxes): float{
        $totalPayment = 0;
        $currentInvoice = $this->invoiceItemHead;
        $consumptionTax = 0.1;

        while($currentInvoice != null){
            $totalPayment += $currentInvoice->getTotalPrice();
            $currentInvoice = $currentInvoice->next;
        }

        return $taxes ? $totalPayment *= (1 + $consumptionTax) : $totalPayment;
    }
}