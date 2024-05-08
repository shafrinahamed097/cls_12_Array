<?php

// Associative Array is Like JS Object key:Value Pair

$person=["name" =>"Shafrin ahamed", "age" => 27, "city"=>"Noakhali"];

foreach($person as $key =>$value){
    echo $key . " " . $value ."\n";
}