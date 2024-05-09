<?php

// array_key_exists() - check if a key exists in an array.

$person=["firstName" => "Shafirn", "lastName" => "Ahamed", "email" => "sahamed@bd.com"];

$check=array_key_exists("firstName", $person);
echo $check;