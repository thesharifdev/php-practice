<?php

$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function divisibleSumPairs($n, $k, $ar) {
    // Write your code here
    $result = 0;
    
    for( $i = 0; $i < $n; $i++) {
        for($j = 0; $j < $n; $j++) {
            if ( ($i < $j) && (( $ar[$i] + $ar[$j] )) % $k == 0 ){
                $result++ ;
            }
        }
    }

    return $result;
}

$n = 6;
$k = 5;
$ar = [1, 2, 3, 4, 5, 6];

var_dump(divisibleSumPairs($n, $k, $ar) );

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";