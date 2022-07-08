<?php
/* A variable is a scalar when it holds a single value of the type integer, float, string, or boolean.
PHP uses the bool keyword to represent the Boolean type.
A string is a sequence of characters surrounded by single quotes (‘) or double quotes (“).
Compound data includes the values that contain more than one value. PHP has two compound types including array and object.
PHP has two special types: null and resource - The resource type holds a reference to an external resource, e.g. a filehandle or a database connection.
*/


$is_email_valid = false;
var_dump($is_email_valid);

$is_submitted = true;
var_dump($is_submitted);
// you can use is_bool() or a var_dump() to check if it is a boolean

//Use the is_int() function returns true if a value (or variable) is an integer.

//to check if a value is a floating-point number, you use the is_float() or is_real() function. The is_float() returns true if its argument is a floating-point number; otherwise, it returns false.

//strings
$name = 'John';
echo 'Hello ' . $name;
//you can use the concatenate operator (.) to concatenate two strings

//string maniulation
$title = 'PHP string is awesome';
echo $title[0];
// you use the following syntax to access certain parts of a string
echo strlen($title);
// strlen() is used to find the length of a string

// heredoc
//PHP heredoc strings behave like double-quoted strings, without the double-quotes. It means that they don’t need to escape quotes and expand variables.
$str = <<<IDENTIFIER
    valid
    IDENTIFIER;

echo $str;

// nowdoc
$str = <<<'IDENTIFIER'
place a string here
it can span multiple lines
and include single quote ' and double quotes "
IDENTIFIER;
//A nowdoc string is similar to a heredoc string except that it doesn’t expand the variables.

// To check if a variable is null or not, you use the is_null() function. The is_null() function returns true if a variable is null; otherwise, it returns false. To check if a variable is null or not, you use the is_null() function. The is_null() function returns true if a variable is null; otherwise, it returns false.

//type juggling
//It means that during the comparison of variables of different types, PHP will convert them to the common, comparable type.
$qty = 20;
if($qty == '20') {
    echo 'Equal';
}

