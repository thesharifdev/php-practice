<?php

$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function pageCount($n, $p) {
    // Write your code here
    
    $result = 0;
    
    if ( ( ($n - 1 == $p) && ($n % 2 != 0) ) || $n == $p || $p > $n || $p == 1) {
        return $result;
    }

    $middile = $n / 2;
    $all_page = intval( $middile );
    $result = intval( $p / 2 );

    if ( $p < $middile ) {
        return $result  ;
    } else if ( $p > $middile ) {
        return ($all_page - $result);
    }
 
    $result = intval($middile / 2) ;
    
    return $result;
}
echo pageCount(6, 2);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";

