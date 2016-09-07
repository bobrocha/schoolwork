<?php
class NumbersFactory {
	public static function makeNumber( $type, $number ) {
		$numObject = null;
		$number = null;

		switch( $type ) {
			case 'float':
				$numObject = new Float( $number );
				break;
			case 'integer':
				$numObject = new Integer( $number );
				break;
			case 'short':
				$numObject = new Short( $number );
				break;
			case 'double':
				$numObject = new Double( $number );
				break;
			case 'long':
				$numObject = new Long( $number );
				break;
			default:
				$numObject = new Integer( $number );
				break;
		}

		return $numObject;
	}
}

/* Numbers interface */
abstract class Number {
	protected $number;

	public function __construct( $number ) {
		$this->number = $number;
	}

	abstract public function add();
	abstract public function subtract();
	abstract public function multiply();
	abstract public function divide();
}
/* Float Implementation */
class Float extends Number {
	public function add() {
		// implementation goes here
	}

	public function subtract() {
		// implementation goes here
	}

	public function multiply() {
		// implementation goes here
	}

	public function divide() {
		// implementation goes here
	}
}
/* Integer Implementation */
class Integer extends Number {
	public function add() {
		// implementation goes here
	}

	public function subtract() {
		// implementation goes here
	}

	public function multiply() {
		// implementation goes here
	}

	public function divide() {
		// implementation goes here
	}
}
/* Short Implementation */
class Short extends Number {
	public function add() {
		// implementation goes here
	}

	public function subtract() {
		// implementation goes here
	}

	public function multiply() {
		// implementation goes here
	}

	public function divide() {
		// implementation goes here
	}
}
/* Double Implementation */
class Double extends Number {
	public function add() {
		// implementation goes here
	}

	public function subtract() {
		// implementation goes here
	}

	public function multiply() {
		// implementation goes here
	}

	public function divide() {
		// implementation goes here
	}
}
/* Long Implementation */
class Long extends Number {
	public function add() {
		// implementation goes here
	}

	public function subtract() {
		// implementation goes here
	}

	public function multiply() {
		// implementation goes here
	}

	public function divide() {
		// implementation goes here
	}
}

$number = NumbersFactory::makeNumber( 'float', 12.5 );

echo "<pre>";
print_r( $GLOBALS );
echo "</pre>";
?>