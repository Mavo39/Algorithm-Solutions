<?php

function middleSubstring(string $stringInput): string{
    $strlen = strlen($stringInput);
    $cutStringSize = floor($strlen / 2);
    $startIndex = ceil($cutStringSize / 2);
    
    if($strlen <= 2) return $stringInput[0];
    else return substr($stringInput, $startIndex, $cutStringSize);
}
