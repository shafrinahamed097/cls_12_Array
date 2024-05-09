<?php

$fruits=['apple', 'banana', 'orange', 'mango', 'pineapple'];
array_splice($fruits, 1, 2, ['demo', 'demo1']);
print_r($fruits);