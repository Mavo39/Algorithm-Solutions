<?php

function shipmentVolumePackages(array $packages): int{
    $total = 0;

    while(count($packages) > 1){
        asort($packages);

        $firstMinValue = array_shift($packages);
        $secondMinValue = array_shift($packages);
        $subtotal = $firstMinValue + $secondMinValue;
        $total += $subtotal;

        array_push($packages, $subtotal);
    }

    return $total;
}

