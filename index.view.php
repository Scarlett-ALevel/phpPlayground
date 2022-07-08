<?php
// ARRAY FUNCTIONS

// array_unshift()
//To prepend one or more elements to an array, you use the array_unshift()
array_unshift ( array &$array , mixed ...$values ) : int

// e.g.
$permissions = [
	'edit',
	'delete',
	'view'
];

array_unshift($permissions, 'new');

print_r($permissions);


// array_push()
//  the array_push() function adds one or more elements to the end of an array
array_push ( array &$array , mixed ...$values ) : int

// e.g.
$numbers = [1, 2, 3];

array_push($numbers, 4, 5);


print_r($numbers);


// array_pop()
// The array_pop() function removes an element from the end of an array and returns that element.
array_pop ( array &$array ) : mixed

// e.g.
$numbers = [1, 2, 3];

$last_number = array_pop($numbers);

echo $last_number; // 3

print_r($numbers);


// array_shift()
// The array_shift() function removes the first element from an array and returns it.
array_shift(array &$array): mixed

// e.g.
$numbers = [1, 2, 3];

$first_number = array_shift($numbers);

print_r($numbers);


// array_keys()
// The PHP array_keys() function accepts an array and returns all the keys or a subset of the keys of the array.
array_keys ( array $array , mixed $search_value , bool $strict = false ) : array

// e.g.
$numbers = [10, 20, 30];

$keys = array_keys($numbers);

print_r($keys);


// array_key_exists()
// the PHP array_key_exists() function checks if a key exists in an array.
array_key_exists ( string|int $key , array $array ) : bool

// e.g.
$roles = [
	'admin' => 1,
	'approver' => 2,
	'editor' => 3,
	'subscriber' => 4
];

$result = array_key_exists('admin', $roles);

var_dump($result); // bool(true)
Code language: HTML, XML (xml)


// in_array()
// The in_array() function returns true if a value exists in an array.
in_array ( mixed $needle , array $haystack , bool $strict = false ) : bool
/*
$needle is the searched value.
$haystack is the array to search.
$strict if the $strict sets to true, the in_array() function will use the strict comparison.
*/

// e.g.
$actions = [
	'new',
	'edit',
	'update',
	'view',
	'delete',
];

$result = in_array('update', $actions);

var_dump($result); // bool(true)


// array_reverse()
// The array_reverse() function accepts an array and returns a new array with the order of elements in the input array reversed.
array_reverse ( array $array , bool $preserve_keys = false ) : array

// e.g. 
$numbers = [10, 20, 30];
$reversed = array_reverse($numbers);

print_r($reversed);
print_r($numbers);


// array_merge()
// to merge one or more array into an array, you use the array_merge() function
array_merge ( array ...$arrays ) : array

// e.g.
$server_side = ['PHP'];

$client_side = ['JavaScript', 'CSS', 'HTML'];

$full_stack = array_merge($server_side, $client_side);

print_r($full_stack);


// SPREAD OPERATOR
//  PHP uses the three dots (...) to denote the spread operator. When you prefix an array with the spread operator, PHP will spread array elements in place
...array_var

// e.g.
$numbers = [4,5];
$scores = [1,2,3, ...$numbers];

print_r($scores);

