<?php 

define('WIDTH','1140px');
define( 'ORIGIN', [0, 0] );

/* define is used to set a constant. 
function takes the constant’s name as the first argument and the constant value as the second argument.
Constants are case sensitive e.g. WIDTH and width are different.
contstants dont start with a $ sign.
Constants can hold an array.
*/

echo WIDTH;
// echo = print

// const keyword - const CONSTANT_NAME = value;

const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price; // 108.5

// define() is a function and const is a construct.
