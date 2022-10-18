<?php

function bonAppetit($bill, $k, $b) {
  
    $sum = 0;
    
    for($i = 0; $i < count($bill); $i++){
      
      if($i != $k){
        $sum+= $bill[$i];
      }
    }
    
    if(($sum/2) === $b){
      return "Bon Appetit";
    }else{
      return ($b - ($sum/2));
    }
  
  }