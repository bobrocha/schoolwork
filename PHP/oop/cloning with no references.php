<?php
class Account {
	public $balance;

	public function __construct( $balance ) {
		$this->balance = $balance;
	}
}

class Person {
	private $name;
	private $age;
	private $id;
	public $account;
	/* Note that $account is a reference since "new" returns
	   by reference. $account holds a reference to the Account object. In cloning this property will
	   be modified by borh objects.
	*/

	public function __construct( $name, $age, $account ) {
		$this->name = $name;
		$this->age = $age;
		$this->account = $account;
	}

	public function setID( $id ) {
		$this->id = $id;
	}

	public function __destruct() {
		if( !empty( $this->id) ) {
			// save Person data
			print "saving person data";
		}
	}
	public function __clone() {
		$this->id = 0;
		$this->account = clone $this->account;////////////////////////////////////////////////////
	}
}

$person = new Person( "bob", 44, new Account( 200 ) );
$person->setID( 343 );
$person2 = clone $person;

// Give $person some money
$person->account->balance += 10;

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>