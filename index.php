<?php

interface Greeting
{
	public function greet();
}
// creates the public function greet

class English implements Greeting
{
	public function greet()
	{
		return 'Hello!';
	}
}

class German implements Greeting
{
	public function greet()
	{
		return 'Hallo!';
	}
}

class French implements Greeting
{
	public function greet()
	{
		return 'Bonjour!';
	}
}

// different classes are used to represent different languages version of greet.

function greeting($greeters)
{
	foreach ($greeters as $greeter) {
		echo $greeter->greet() . '<br>';
	}
}
// this prints greet for each language 

$greeters = [
	new English(),
	new German(),
	new French(),
];
// these are the values passed through the class to output the greetings for.

greeting($greeters);