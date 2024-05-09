<?php 

// array_search() - Searches an array for a specific value and returns the key if found

$person = ["firstName" => "Shafirn", "lastName" => "Ahamed", "email" => "sahamed@bd.com"];
$search=array_search("Ahamed", $person);
echo $search;