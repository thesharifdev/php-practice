<?php

$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
   
    $app = 0; 
    $orr = 0;

    foreach($apples as $c){
        $g = $a+$c;
        if ($g >= $s && $g <=$t){
            $app++;
        }
    }
    echo "$app\n";
    foreach($oranges as $c){
        $g = $b+$c;
        if ($g >= $s && $g <=$t){
            $orr++;
        }
    }
    echo "$orr\n";

}

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";

