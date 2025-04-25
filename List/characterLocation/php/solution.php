<?php 

$direction = [
    'N' => [0,1],
    'E' => [1,0],
    'W' => [-1,0],
    'S' => [0,-1]   
];

function characterLocation(string $commands): array{
    // 連想配列の取り込み
    global $direction;

    $res = [0, 0];

    // commandsが空文字の場合
    if(strlen($commands) === 0) return $res;

    for($i = 0; $i < strlen($commands); $i++){
        if($commands[$i] == 'N') $res[1] += $direction['N'][1];
        else if($commands[$i] == 'E') $res[0] += $direction['E'][0];
        else if($commands[$i] == 'W') $res[0] += $direction['W'][0];
        else if($commands[$i] == 'S') $res[1] += $direction['S'][1];
    }

    return $res;
}

// 他の方のコードから学んだ解き方
// foreach (str_split($commands) as $command) {
//     if (isset($direction[$command])) {
//         $res[0] += $direction[$command][0];
//         $res[1] += $direction[$command][1];
//     }
// }