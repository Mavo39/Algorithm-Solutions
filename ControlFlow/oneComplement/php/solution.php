<?php

function oneComplement(string $bits): string{
    $output = "";
    for($i = 0; $i < strlen($bits); $i++){
        $output .= ($bits[$i] == "0" ? "1" : "0");
    }
    return $output;
}

