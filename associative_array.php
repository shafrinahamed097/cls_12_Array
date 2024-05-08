<?php

// Associative Array is Like JS Object key:Value Pair

$person=["name" =>"Shafrin Ahamed", "age" =>27, "city"=>"Noakhali"];



// apply foreach this array

foreach($person as $key => $value){
    echo $key . " " . $value ."\n";
}