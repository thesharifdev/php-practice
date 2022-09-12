<?php

$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    
    if($x1 > $x2 && $v1 > $v2){
        return "NO";
    }else if($x2 > $x1 && $v2 > $v1){
    return "NO";
    }else{
         $start1 = $x1;
         $start2 = $x2;
        $counter = 0;
        while(true){

            if($start1 == $start2){
              return "YES";
              break;
            }else if($counter > 10000){
                return "NO";
                break;
             }

        $start1 += $v1;
        $start2 += $v2;

        $counter++;
    }
    }
}

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";