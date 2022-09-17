<?php

$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function getTotalX($a, $b){
    $highestA  = max($a);
    $lowestB  =  min($b);

    $count = 0;

    if ($lowestB >= $highestA) {
        
        while ($lowestB >= $highestA) {
            $dividable = true;

            foreach($b as $value) {
                if ($value % $lowestB) {
                   $dividable = false;

                   break;
                }
            }

            if ($dividable) {
                break;
            }

            $lowestB = round($lowestB / 2);    
        }

        if ($dividable) {
            $vars = [];
            $vars[] = $lowestB;

            for ($i = $lowestB - 1; $i > 0; $i--) {
                if (!($lowestB % $i)) {
                    $vars[] = $i;
                }

                if ($i < $highestA) {
                    break;
                }
            }

            foreach($vars as $var) {
                $dividable = true;

                foreach($a as $aValue) {
                    if ($var % $aValue) {
                        $dividable = false;
                        break;
                    }
                }

                if ($dividable) {
                    $count++;
                }
            }
        }
    }

    return $count;
}

$a = [2, 4];
$b = [16, 32, 96];

echo getTotalX($a, $b);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";