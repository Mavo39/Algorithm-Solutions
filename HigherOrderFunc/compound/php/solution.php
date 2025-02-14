<?php

function calculateFinalMoney(array $interests, int $capital): int{
    return (int)array_reduce($interests, function(float $total, int $interest): float{
        return $total *= (1 + ($interest / 100));
    }, $capital);
}

