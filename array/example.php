<?php

//simple array
$data_types = ['array', 'stack', 'queue', 'tree', 'heap', 'graph'];

//associative array
$alphabet = [
    'a' => 'apple',
    'b' => 'ball',
    'c' => 'cat'
];

//two dimensional array
$two_d_array = [
    ['omuk', 'tomuk', 'habi', 'jabi'],
    ['shorif', 'morif', 'torif', 'jorif'],
    ['pui', 'dui', 'mui', 'tui']
];

//multidimensional array
$cars = [
    'toyota' => [
        ['aqua 202', 'aqua 304']
    ],

    'audi' => [
        ['omuk', 'tomuk', 'arokichu']
    ]
];

/**
 * array crud
 */

 //create
 $name = ['faruk', 'taruk', 'maruk'];

 //read
 echo $name[1];

 //add
 array_push($name, 'sharif');

 //update
 $name[0] = 'faruki';

//delete
array_pop($name);
array_shift($name);