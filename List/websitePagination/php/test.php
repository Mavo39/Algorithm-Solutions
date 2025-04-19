<?php

require_once './solution.php';

echo json_encode(websitePagination(["url1","url2","url3","url4","url5","url6"],4,1)) . PHP_EOL;
echo json_encode(websitePagination(["url1","url2","url3","url4","url5","url6","url7","url8","url9"],3,2)) . PHP_EOL;
echo json_encode(websitePagination(["url1","url2","url3","url4","url5","url6","url7","url8","url9"],4,3)) . PHP_EOL;