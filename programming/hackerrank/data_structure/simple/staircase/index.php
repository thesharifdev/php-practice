<?php

function staircase($n) {
    // Write your code here
   
    $input_number = $n;    
    for($i = 1; $i <= $n; $i++){
        
        echo str_repeat(' ', $input_number-1).str_repeat('#', $i)."\n";
        
        $input_number--;
    }
}

$n = intval(trim(fgets(STDIN)));

staircase($n);