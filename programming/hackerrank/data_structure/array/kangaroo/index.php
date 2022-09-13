<?php

$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    
    if(($x1 > $x2 && $v1 > $v2) || ($x2 > $x1 && $v2 > $v1)){
        return "NO";
    }else{
        
        $counter = 0;

        while(true){

            if($x1 == $x2){
              return "YES";
              break;
            }else if($counter > 10000){
                return "NO";
                break;
             }

        $x1 += $v1;
        $x2 += $v2;

        $counter++;
    }
    }
}
$x1 = (int)readline('Enter the position of first Kangaroo: ');PHP_EOL;
$v1 = (int)readline('Enter the jump value of first Kangaroo: ');PHP_EOL;
$x2 = (int)readline('Enter the position of second Kangaroo: ');PHP_EOL;
$v2 = (int)readline('Enter the jump value of second Kangaroo: ');PHP_EOL.PHP_EOL;
echo "======================".PHP_EOL;
var_dump(kangaroo($x1, $v1, $x2, $v2));PHP_EOL;
echo "======================".PHP_EOL;


$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";