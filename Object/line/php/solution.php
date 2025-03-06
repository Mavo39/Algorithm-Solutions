<?php

class Line{
    public Point $startPoint;
    public Point $endPoint;

    public function __construct(Point $startPoint, Point $endPoint){
        $this->startPoint = $startPoint;
        $this->endPoint = $endPoint;
    }

    public function getLength(): float{
        $xLength = abs($this->startPoint->x - $this->endPoint->x);
        $yLength = abs($this->startPoint->y - $this->endPoint->y);
        return sqrt($xLength ** 2 + $yLength ** 2);
    }
}

class Point{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }
}
