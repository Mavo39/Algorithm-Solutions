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
    public ?InvoiceItem $next; // 型の安全性を高める

    public function __construct($product, $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
        $this->next = null;
    }

    public function getTotalPrice(): float{
        return $this->product->price * $this->quantity;
    }
}