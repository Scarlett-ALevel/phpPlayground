<?php
// ARRAYS

// Associative arrays
// Associative arrays are arrays that allow you to keep track of elements by names rather than by numbers.
$html = array();
// used to create an array
$html['title'] = 'PHP Associative Arrays';
$html['description'] = 'Learn how to use associative arrays in PHP';

echo $html['title'];
// you have to use the key to add elements to the array

foreach ($array_name as $element) {
    // process element here
}
// to iterate over items in an associative array e.g.
$capitals = [
	'Japan' => 'Tokyo',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'United Kingdom' => 'London',
	'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital) {
	echo "The capital city of {$country} is $capital" . '<br>';
}

// used to iterate over items in an array
// e.g.
$colors = ['red', 'green', 'blue'];

foreach ($colors as $color) {
	echo $color . '<br>';
}

// Adding items to a multi-dimensional array
$tasks = [
	['Learn PHP programming', 2],
	['Practice PHP', 2],
	['Work', 8],
	['Do exercise', 1],
];

$tasks[] = ['Build something matter in PHP', 2];
// adding the item

print_r($tasks );

// Removing items from a multi-dimensional array
$tasks = [
	['Learn PHP programming', 2],
	['Practice PHP', 2],
	['Work', 8],
	['Do exercise',1],
];

unset($tasks[2]);
// uses unset

print_r($tasks);

// array_splice can be used to re-index arrays
array_splice($tasks[2], 2, 1);

// to iterate a multi-dimensional array you need a nested foreach loop
foreach ($tasks as $task) {
	foreach ($task as $task_detail) {
		echo $task_detail . '<br>';
	}
}
