<?php 
// A multidimensional array is an array that contains one or more arrays.



$arr=[
   ['a','b','c','d'],
   ['e','f','g'],
   ['h','i','j']

];

// Accessing values

// echo $arr[1][1];

// Multi Dimensional Asscoiative Array  

$arr1=[
    ['firstName'=>'shafrin' ,'lastName'=>'Ahamed', 'age' =>27],
    ['firstName'=>'shafrin' ,'lastName'=>'Ahamed', 'age' =>27],
    ['firstName'=>'shafrin' ,'lastName'=>'Ahamed', 'age' =>27],
];

echo $arr1[0]['firstName'], $arr1[0]['lastName'];