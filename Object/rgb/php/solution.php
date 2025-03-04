<?php

class RGB {
    public $red;
    public $green;
    public $blue;

    public function __construct($red, $green, $blue) {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    // 16進数カラーコードを返す
    public function getHexCode() {
        return sprintf("#%02x%02x%02x", $this->red, $this->green, $this->blue); // sprintf()を使って、フォーマット文字列を返す
    }

    // 2進数表現を返す
    public function getBits() {
        $bits = sprintf("%08b%08b%08b", $this->red, $this->green, $this->blue);
        return ltrim($bits, '0'); // 先頭の0を削除
    }

    // 色の濃さを判断
    public function getColorShade() {
        if ($this->red === $this->green && $this->green === $this->blue){
            return "grayscale";
        }
        $max = max($this->red, $this->green, $this->blue);
        if ($this->red === $max) {
            return "red";
        }
        if ($this->green === $max) {
            return "green";
        }
        return "blue";
    }
}