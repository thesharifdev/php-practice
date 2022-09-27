<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();

function plusMinus($arr) {
    // Write your code here
    
    $positive = 0;
    $negative = 0;
    $zero     = 0;
    $total_number = count($arr);
    
    for($i = 0; $i < $total_number; $i++){
        if($arr[$i] > 0){
            $positive++;
        }else if($arr[$i] < 0){
            $negative++;
        }else{
            $zero++;
        }
    }
    
    $positive_ratio = number_format((float)($positive / $total_number ), 6, '.', '');
    $negative_ratio = number_format((float)($negative / $total_number ), 6, '.', '');
    $zero_ratio = number_format((float)($zero /$total_number ), 6, '.', '');
    
    echo $positive_ratio.PHP_EOL.$negative_ratio.PHP_EOL.$zero_ratio.PHP_EOL;
}

plusMinus([-4, 3, -9, 0, 4, 1]);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "Total execution time: " . ($endTime - $startTime) . PHP_EOL;
echo "Total memory used: " . ($endMemory - $startMemory) / (1024 * 1024) .PHP_EOL;