<?php

function myCalculator($num1, $oper, $num2) {
// cretaes a fucnton whuch apsses through all three of the data being collected
// declares the variable
$sum;
switch ($oper) {
	// switch is used like an if statement
	case "add":
		$sum = $num1 + $num2;
		break;
	// if $oper == add then you add the numbers, break takes you out of the statement
	case "sub":
		$sum = $num1 - $num2;
		break;
	defult:
	// defult = else, if it doesn't match any of the others, carry out this
		$sum = "there was an error!";
		break;
   }
   return $sum;
   // returns the answer
}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];
// adds the data needed from the index.php for the calucaltion to work ( using an import)

echo "Value: " . myCalculator($num01, $oper, $num02);
// runs the function