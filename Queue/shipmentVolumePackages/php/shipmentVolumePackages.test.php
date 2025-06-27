<?php 

require_once './shipmentVolumePackages.php';

// テスト用関数
function assertEqual(int $expected, array $arr): void{
    $res = shipmentVolumePackages($arr);
    
    if($expected === $res){
        echo "True\n";
    } else {
        echo "false\n";
    }
}

// 1. 
assertEqual(28 ,[6,5,6]);

// 2. 
assertEqual(69, [5,3,10,9,4]);

// 3. 
assertEqual(0, [15]);

// 4. 
assertEqual(80, [1,2,3,4,5,6,10]);

// 5. 
assertEqual(33, [5,4,3,2,1]);

// 6. 
assertEqual(700, [45,65,20,3,4,5,66,19,23,3,1]);
