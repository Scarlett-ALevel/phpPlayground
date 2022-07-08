<?php

$balance = 100;
$message = 'Insufficient balance';

var_dump($balance);
//prints the string length and the variable type e.g. int(100)
var_dump($message);
//prints the variable type (string) and the length of characters (20)



// putting the output in <pre> tags makes it more readable
echo '<pre>';
var_dump($balance);
echo '</pre>';


echo '<pre>';
var_dump($message);
echo '</pre>';


// you can combine the var_dump() with die() functions
$message = 'Dump and die example';

echo '<pre>';
var_dump($message);
echo '</pre>';
die();

echo 'After calling the die function';
// Since the die() function terminates the script immediately, this statement did not execute

/* 
First, dump the information about the $message variable using the var_dump() function.
Second, terminate the script immediately by calling the die() function.
*/

//making the code reusable with functions
function dd($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die();
}

// .. dd function

$message = 'Dump and die example';

dd($message);