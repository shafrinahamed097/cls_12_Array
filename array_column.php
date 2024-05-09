<?php 

// array_column() - Returns the values of a single column in the input array

$arr=[
    ['firstName' => 'shafrin', 'lastName' => 'Ahamed', 'age' => 27],
    ['firstName' => 'Hafiz', 'lastName' => 'Ahamed', 'age' => 27],
    ['firstName' => 'Mr.', 'lastName' => 'Shakib', 'age' => 27],
];

$firstName = array_column($arr, 'firstName');
print_r($firstName);