<?php
// ARRAY SORT
// The sort() function sorts the elements of an array in place in ascending order.
sort(array &$array, int $flags = SORT_REGULAR): bool

/*
The sort() function has two parameters:
  $array is the input array to sort.
  $flags argument is one or a combination of multiple flags that change the sorting behavior of the function.
*/

$names = ['Bob', 'John', 'Alice'];
sort($names, SORT_STRING);

print_r($names);
// sorts the names alphabtically

// rsort()
// The rsort() function is like the sort() function except that it sorts the elements of an array in descending order.
rsort(array &$array, int $flags = SORT_REGULAR): bool


$ranks = ['A-1', 'A-2', 'A-12', 'A-11'];
rsort($ranks, SORT_STRING | SORT_NATURAL);
// sorts it in its 'natural order'

print_r($ranks);

// ksort()
// the ksort() function sorts the elements of an array by their keys. The ksort() is mainly useful for sorting associative arrays.

$employees = [
    'john' => [
        'age' => 24,
        'title' => 'Front-end Developer'
    ],
    'alice' => [
        'age' => 28,
        'title' => 'Web Designer'
    ],
    'bob' => [
        'age' => 25,
        'title' => 'MySQL DBA'
    ]
];
ksort($employees, SORT_STRING);

print_r($employees);
// first it defines the array, then it sorts it into acsending order.
// The krsort() function is like the ksort() function except that it sorts the keys of an array in descending order

// usort()
// To specify a custom comparison function for sorting, you use the usort() function
$numbers = [2, 1, 3];

usort($numbers, function ($x, $y) {
    if ($x === $y) {
        return 0;
    }
    return $x < $y ? -1 : 1;
});

print_r($numbers);

// asort()
// The asort() function sorts the elements of an associative array in ascending order. Unlike other sort functions, the asort() function maintains the index association.

$mountains = [
    'K2' => 8611,
    'Lhotse' => 8516,
    'Mount Everest' => 8848,
    'Kangchenjunga' => 8586,
];
asort($mountains);

print_r($mountains);
// to sort an associative array in descending order and maintain the index association, you use the arsort() function.


// Use the uasort() function to sort an associative array with a user-defined comparison function and maintains the index association.

// the uksort() function allows you to sort an array by key using a user-defined comparison function. Typically, you use the uksort() function to sort the keys of an associative array.

// An anonymous function is a function that doesn’t have a name.
function ($x, $y) {
	return $x * $y;
};
// An anonymous function can be assigned to a variable, passed to a function, or returned from a function.