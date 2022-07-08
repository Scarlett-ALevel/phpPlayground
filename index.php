<?php
// FUNCTIONS

function welcome() 
{  
    echo 'Welcome';
}
// defining functions

//the inputs make functions reusable and more useful. And the inputs of a function are called parameters. A function may have zero or more parameters.

welcome();
// calling a function

// you can pass arguements through functions
function welcome_user($username)
{
	echo 'Welcome ' . $username;
}

welcome('Admin');

//an argument is a piece of data that you pass into the function when you call it.
return value;
// used to return a value (print)

// passing by VALUE
$counter = 1;
function increase($value)
{
	$value+= 1;
	echo $value. <br>; // 2
}

// increase the counter
increase($counter);

echo $counter . <br>; // 1
/* 
When the value of an argument within the function is changed and doesn’t get changed outside the function, it is passed by value.

By default, arguments are passed by values in PHP. If you want a function to change its arguments, you need to pass the arguments by reference.
*/


// passing by REFERENCE
$counter = 1;
function increase( &$value )
{
	$value += 1;
	echo $value . <br>; // 2
}

// increase the counter
increase($counter);

echo $counter . <br>; // 2


// GLOBAL AND LOCAL VARIABLES
$message = 'Hello';

function say()
{
	global $message;
	echo $message; // Hello
}

say();
// PHP allows you to access a global variable within a function by using the global keyword.

// STATIC VARIABLES
//A static variable retains its value between function calls. Also, a static variable is only accessible inside the function. To define a static variable, you use the static keyword. 
function get_counter() {
    static $counter = 1;
    return $counter++;
}

echo get_counter() .  '<br>'; // 1
echo get_counter() .  '<br>'; // 2
echo get_counter() .  '<br>'; // 3

// VARIADIC FUNCTIONS
/*
A variadic function accepts a variable number of arguments.
Do use the ... operator to define a variadic function.
Only the last parameter can be variadic.
*/
