<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function birthday($s, $d, $m) {
    // Write your code here
    $output = 0; $len = count($s);
    
  for ($i = 0; $i < $len; $i++) {
        $arr = array_slice($s, $i, $m);
        
        if (count($arr) == $m && array_sum($arr) == $d) {
            ++$output;
        }
    }
    return $output;
}

$s = [2, 2, 1, 3, 2];
$d = 4;
$m = 2;

echo birthday($s, $d, $m);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";