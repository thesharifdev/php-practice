<?php
function rotateLeft($d, $arr) {
    $counter = 0;
    $ct =1;
   $arr_len = count($arr);
  
  for($i = $d; $i > 1; $i--) {
    $rotatedElement = $arr[$counter];
    $last_el        = $arr[$arr_len - $ct];


    $arr[$arr_len - $ct] = $rotatedElement;
    $arr[$counter] = $last_el;
    $counter++;
    $ct++;
  }
  return $arr;
}

print_r(rotateLeft(2, [1,2,3,4,5]));