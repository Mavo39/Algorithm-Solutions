<?php

class Dog {
    public string $name;
    public int $size;
    public int $age;

    public function __construct(string $name, int $size, int $age){
        $this->name = $name;
        $this->size = $size;
        $this->age = $age;
    }

    public function bark(): string{
        switch($this->size){
            case $this->size >= 50:
                return "Wooof! Woof!";
            case $this->size >= 20:
                return "Ruff! Ruff!";
            default:
                return "Yip! Yip!";
        }
    }

    public function calcHumanAge(): int{
        return 12 + ($this->age - 1) * 7;
    }
}
