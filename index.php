<?php

// IF STATEMENTS
$is_admin = true;
if ($is_admin)
    echo 'Welcome, admin!';
// this uses an if statement to check if admin is set to true. Because it is, it outputs the statement.

// If you want to execute multiple statements in the if block, you can use curly braces to group multiple statements
if ( expression ) {
    statement1;
    statement2;
    // more statement
 }

// you can nest if statements
$is_admin = true;
$can_approve = true;

if ($is_admin) {
	echo 'Welcome, admin!';
	if ($can_approve) {
		echo 'Please approve the pending items';
	}
}
// Do use the pattern if ( value == $variable_name ) {} to avoid possible mistakes.
if ( $is_authenticated ) {
    echo 'Welcome!';
} 
else {
     echo 'You are not authorized to access this page.'
}
// you can use else statements after an if
// this allows you to mix with html

if ( expression ): ?>
    <!--Show HTML code when expression is true -->
    <?php else: ?>
    <!--Show HTML code when expression is false -->
    <?php endif ?>

<?php
//Use the if...elseif statement to evaluate multiple expressions and execute code blocks conditionally.

// SWITCH STATEMENTS
$role = 'admin';
$message = '';

switch ($role) {
	case 'admin':
		$message = 'Welcome, admin!';
		break;
	case 'editor':
		$message = 'Welcome! You have some pending articles to edit';
		break;
	case 'author':
		$message = 'Welcome! Do you want to publish the draft article?';
		break;
	case 'subscriber':
		$message = 'Welcome! Check out some new articles.';
		break;
	default:
		$message = 'You are not authorized to access this page';
}

echo $message;
//Since PHP executes the switch statement from the matching case label till it encounters the break statement, you can combine several cases in one.
$message = '';
$role = 'author';

switch ($role) {
	case 'admin':
		$message = 'Welcome, admin!';
		break;
	case 'editor':
	case 'author':
		$message = 'Welcome! Do you want to create a new article?';
		break;
	case 'subscriber':
		$message = 'Welcome! Check out some new articles.';
		break;
	default:
		$message = 'You are not authorized to access this page';
}

echo $message;

// FOR STATEMENTS
for (; ;) {
	// do something
	// ...

	// exit the loop
	if (condition) {
		break;
	}
}
// e.g.
$total = 0;

for ($i = 1; $i <= 10; $i++) {
	$total += $i;
}

echo $total;

// WHILE STATEMENTS
<?php

while (expression) {
	statement;
}
// e.g
$total = 0;
$number = 1;

while ($number <= 10) {
	$total += $number;
	$number++;
}

echo $total;

/* Typically, you use the break statement with the if statement that specifies the condition for the terminating loop.

The break statement accepts an optional number that specifies the number of nested enclosing structures to be broken out of.

If you don’t specify the optional number, it defaults to 1. In this case, the break statement only terminates the immediate enclosing structure.

*/

// CONTINUE STATEMENTS
//The continue statement is used within a loop structure such as for, do...while, and while loop. The continue statement allows you to immediately skip all the statements that follow it and start the next iteration from the beginning.
for ($i = 0; $i < 10; $i++) {
	if ($i % 2 === 0) {
		continue;
	}
	echo "$i\n";
}
//First, use a for loop to iterate from 0 to 9.
//Second, skip the current echo statement if $i is an even number. The $i is an even number when the $i % 2 returns 0. As a result, the output shows only the odd numbers.

