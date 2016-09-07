<?php
class Person {
	private $_name;
	private $_age;
	private $writer;

	public function __construct( PersonWriter $writer ) {
		$this->writer = $writer;
	}

	public function __set( $property, $value ) {
		$method = "set{$property}";

		if( method_exists( $this, $method ) ) {
			return $this->$method( $value );
		}
	}
	public function __get( $property ) {
		$method = "get{$property}";

		if( method_exists( $this, $method ) ) {
			return $this->$method();
		}

		echo "$property does not exist";
	}

	public function __call( $methodname, $args ) {
		if( method_exists( $this->writer, $methodname ) ) {
			return $this->writer->$methodname( $this );
		}
	}

	public function setName( $name ) {
		$this->_name = $name;

		if( !is_null( $name ) ) {
			$this->_name = strtoupper( $this->_name );
		}
	}

	public function setAge( $age ) {
		$this->_age = strtoupper( $age );
	}

	public function getName() {
		return "Bob";
	}

	public function getAge() {
		return 44;
	}
}

class PersonWriter {
	public function writeName( Person $p ) {
		echo $p->getName() . "\n";
	}

	public function writeAge( Person $p ) {
		echo $p->getAge() . "\n";
	}
}

$person = new Person( new PersonWriter() );
$person->writeName();

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>