<?php

class Product{
    public string $title;
    public float $price;

    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }
}
