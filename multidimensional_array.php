<?php
// A multidimensional array is an array that contains one or more arrays.



$arr = [
    ['a', 'b', 'c', 'd'],
    ['e', 'f', 'g'],
    ['h', 'i', 'j']

];

// Accessing values

// echo $arr[1][1];

// Multi Dimensional Associative Array  

$arr1 = [
    ['firstName' => 'shafrin', 'lastName' => 'Ahamed', 'age' => 27],
    ['firstName' => 'shafrin', 'lastName' => 'Ahamed', 'age' => 27],
    ['firstName' => 'shafrin', 'lastName' => 'Ahamed', 'age' => 27],
];

// echo $arr1[0]['firstName'], $arr1[0]['lastName'];

// ForEach Loop Through an Multidimensional Array

foreach($arr1 as $child){
    foreach($child as $key=>$value){
        echo "$key: $value" ."\n";
    }
}
