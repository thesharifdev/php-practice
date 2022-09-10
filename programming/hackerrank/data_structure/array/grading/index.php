<?php 
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

function gradingStudents($grades) {
    // Write your code here
   $multipleToRoundTo = 5;
   $numberToRoundAt = 2;
  for($i = 0; $i < count($grades); $i++) {
    if($grades[$i] >= 38 && $grades[$i] % $multipleToRoundTo > $numberToRoundAt) {
      $grades[$i] = $grades[$i] + ($multipleToRoundTo - ($grades[$i] % $multipleToRoundTo));
    }
  }
  return $grades;
}

print_r(gradingStudents([44, 77, 32, 96, 58]));

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";