<?php
// メソッド
function decimalToHexadecimal(int $decNumber): string{
    return strtoupper(dechex($decNumber));
}
