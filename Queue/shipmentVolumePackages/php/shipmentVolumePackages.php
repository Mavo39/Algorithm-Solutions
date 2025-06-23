<?php

// 自分で書いたコード
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

// 他の方から引用したコード
// function shipmentVolumePackages(array $packages): int{
//     $pq = new SplPriorityQueue();
//     foreach ($packages as $item){
//         # ($value, $priority)の組み合わせで格納する。最小優先度のため-を付けている
//         $pq->insert($item, -$item);
//     }

//     $total = 0;
//     while ($pq->count() > 1){
//         $item1 = $pq->extract();
//         $item2 = $pq->extract();
//         $newItem = $item1 + $item2;
//         $pq->insert($newItem, -$newItem);
//         $total += $newItem;
//     }

//     return $total;
// }
