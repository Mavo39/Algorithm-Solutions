<?php 

use Common\Node;

function printListFromNode(?Node $node): void{
    if($node === null){
        echo "null" . PHP_EOL;
        return;
    }

    $str = "";
    $current = $node;

    while($current !== null){
        $str .= $current->data;
        if($current->next !== null){
            $str .= "➡";
        }
        $current = $current->next;
    }

    echo $str . PHP_EOL;
}
 