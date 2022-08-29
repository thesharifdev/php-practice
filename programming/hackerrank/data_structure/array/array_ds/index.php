<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();


function array_ds(array $n) {
    $array_length = count($n);
    $result = [];

    for ($i=1; $i <= $array_length; $i++) { 
        $result[] = $n[$array_length - $i];
    }
    return $result;
}

print_r(array_ds([1, 4, 3, 2]));


$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "Total execution time: " . ($endTime - $startTime) . PHP_EOL;
echo "Total memory used: " . ($endMemory - $startMemory) / (1024 * 1024) .PHP_EOL;