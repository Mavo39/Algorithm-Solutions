<?php 

use Common\Node;

require_once '../../Common/php/Node.php';

function linkedListLastValue(?Node $head): int{
    if($head === null) return 0;

    $iterator = $head;
    while($iterator->next !== null){
        $iterator = $iterator->next;
    }

    return $iterator->data;
}