<?php 

require_once './solution.php';

var_dump(winnerBlackjack(["♣4","♥7","♥7"],["♠Q","♣J"])) . PHP_EOL;
var_dump(winnerBlackjack(["♥10","♥6","♣K"],["♠Q","♦2","♥K"])) . PHP_EOL;
var_dump(winnerBlackjack(["♠3","♠J","♣5"],["♣A","♥Q","♣5"])) . PHP_EOL;
var_dump(winnerBlackjack(["♥2","♣A","♣8","♥7","♥3"],["♥6","♥K","♣5","♥K"])) . PHP_EOL;
var_dump(winnerBlackjack(["♥2","♣A","♣8","♥7","♥3"],["♥2","♣A","♣8","♥7","♥3"])) . PHP_EOL;