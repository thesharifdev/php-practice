<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();


function rotateLeft($d, $arr) {
    
    $counter = 0;

    while ($counter < $d) {
        $rotatedElement = array_shift($arr);
        array_push($arr, $rotatedElement);
        $counter++;
    }

    return $arr;
}

print_r(rotateLeft(5, [1,2,3,4,5,6,7,8,9,10]));

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "Total execution time: " . ($endTime - $startTime) . PHP_EOL;
echo "Total memory used: " . ($endMemory - $startMemory) / (1024 * 1024) .PHP_EOL;