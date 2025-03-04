<?php
require_once('./solution.php');

$color1 = new RGB(0, 153, 255);
var_dump($color1->getHexCode());
var_dump($color1->getBits());
var_dump($color1->getColorShade());

$color2 = new RGB(255, 255, 204);
var_dump($color2->getHexCode());
var_dump($color2->getBits());
var_dump($color2->getColorShade());

$color3 = new RGB(0, 87, 0);
var_dump($color3->getHexCode());
var_dump($color3->getBits());
var_dump($color3->getColorShade());

$gray = new RGB(123, 123, 123);
var_dump($gray->getHexCode());
var_dump($gray->getBits());
var_dump($gray->getColorShade());