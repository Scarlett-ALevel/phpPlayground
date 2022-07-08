<?php

$x = 20;
$y = 10;

// add, subtract, and multiplication operators demo
echo $x + $y . '<br/>';  // 30
echo $x - $y . '<br/>';  // 10
echo $x * $y . '<br/>';  // 200

// division operator demo
$z = $x / $y;
echo gettype($z)  . '<br/>'; //  integer

$z = $y / $x;
echo gettype($z)  . '<br/>'; // double

// modulus demo

$y = 15;
echo $x % $y . '<br/>'; // 5