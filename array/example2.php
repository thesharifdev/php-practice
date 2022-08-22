<?php

$array = [1, 5, 6, 4, 2];

function updateArray (int $key, $value, array $array ): array{
    if( $array[$key] ){
        $array[$key] = $value; 
        
        return $array;
    }

    return "This key is not exists";

}
