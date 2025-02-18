<?php

function decimalToBinary(int $decNumber): string{
    $binary = "";
    
    for($i = $decNumber; $i >= 1; $i = floor($i / 2)){
        if($i % 2 == 0){
            $binary = "0" . $binary;
        } else {
            $binary = "1" . $binary;
        }
    }
    return $binary;
}
