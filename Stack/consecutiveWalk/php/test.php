<?php 

require_once './consecutiveWalk.php';

// 1.
echo json_encode(consecutiveWalk([3,4,20,45,56,6,4,3,2,3,9]));

// 2.
echo json_encode(consecutiveWalk([4,5,4,2,4,3646,34,64,3,0,-34,-54]));

// 3.
echo json_encode(consecutiveWalk([4,5,4,2,4,3646,34,64,3,0,-34,-54,4]));

// 4.
echo json_encode(consecutiveWalk([]));

// 5.
echo json_encode(consecutiveWalk([1]));

// 6. 
echo json_encode(consecutiveWalk([1,2,3,2,4]));