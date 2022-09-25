<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function breakingRecords($scores) {
    // Write your code here
   $good = 0;
    $bad = 0;
    $goodScore = $scores[0];
    $badScore = $scores[0];
    $lengthOfData = count($scores);
    for( $i = 1; $i < count($scores); $i++) {
        if ($scores[$i] > $goodScore) {
            $goodScore = $scores[$i];
            $good++;
            continue;
        }
        if ($scores[$i] < $badScore) {
            $badScore = $scores[$i];
            $bad++;
            continue;
        }
    }
    return [$good, $bad];
}

print_r(breakingRecords([14, 5, 34, 23, 43]));

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";