<?php
function processData($input) {
  //Enter your code here
   $S = [];
   $lastAnswer = 0;
   $inputArray = $input.explode("\n");
   $N = $inputArray[0].explode(" ")[0];
  for ( $i = 0; $i < $N; $i++) {
    $S[i] = [];
  }

  $inputArray.slice(1).foreach(($el) => {
     $[$q, $x, $y] = $el.explode(" ").map($Number);
     $seq = ($x ^ $lastAnswer) % N;
    switch ($q) {
      case 1:
        $S[$seq].push(y);
        break;
      case 2:
         $size = $S[$seq].length;
         $index = y % size;
        $lastAnswer = S[seq][index];
        console.log($lastAnswer);
        break;
    }
  });
  return S;
}