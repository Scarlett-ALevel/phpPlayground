<?php
// CLASSES IN OOP
class BankAccount
{
}
// defining a class called BankAccount

// defining a method within a class
class ClassName
{
	public function methodName(parameter_list)
	{
		// implementation
	}
}
// Like a property, a method also has one of the three visibility modifiers: public, private, and protected. If you define a method without any visibility modifier, it defaults to public.

// In PHP, $this keyword references the current object of the class. The $this keyword allows you to access the properties and methods of the current object within the class using the object operator (->)

class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
	}



	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
                return false;

	}

}

// this is called method chaining
$account->deposit(100)
	->deposit(200)
	->deposit(300);


/*
types of access:
Use the public access modifier to allow access to properties and methods from both inside and outside of the class.
Use the private access modifier to prevent access from the outside of the class.
Do use private properties with a pair of public getter/setter methods.
*/

// there is a constructor and destructor method which can be used to help reduce the complexity of code.