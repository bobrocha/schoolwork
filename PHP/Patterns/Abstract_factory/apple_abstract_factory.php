<?php


abstract class AbstractAppleFactory {
	abstract public function createiPod( $capacity, $type, $color, $engraving );
	abstract public function createiPhone( $capacity, $type, $color, $antenna );
	abstract public function createComputer( $type, $HDCapacity, $CPU, $ram );
}

class iPodFactory extends AbstractAppleFactory {
	public function createiPod( $capacity, $type, $color, $engraving ) {
		$class = 'iPod' . $type;

		return new $class( $capacity, $color, $engraving);
	}

	public function createiPhone( $capacity, $type, $color, $antenna ){ /* no implementation necessary */}
	public function createComputer( $type, $HDCapacity, $CPU, $ram ){ /* no implementation necessary */}
}

/******************************* Interfaces and Abstract Classes *******************************/
interface iPlayer {
	public function play();
	public function stop();
	public function fastForward();
	public function rewind();
}

abstract class iPod implements iPlayer {
	protected $capacity;
	protected $color;
	protected $engraving;

	public function __construct( $capacity, $color, $engraving = null ) {
		$this->capacity = $capacity;
		$this->color = $color;
		$this->engraving = $engraving;
	}
}

abstract class iPhone implements iPlayer {
	protected $capacity;
	protected $type;
	protected $color;
	protected $antenna;

	public function __construct( $capacity, $type, $color, $antenna ) {
		$this->capacity = $capacity;
		$this->type = $type;
		$this->color = $color;
		$this->antenna = $antenna;
	}
	abstract public function call();
	abstract public function hangUp();
	abstract public function connectToInternet();
}

abstract class Computer {
	protected $type;
	protected $HDCapacity; /* hard drive capacity */
	protected $CPU;
	protected $ram;

	public function __construct( $type, $HDCapacity, $CPU, $ram ) {
		$this->type = $type;
		$this->HDCapacity = $HDCapacity;
		$this->CPU = $CPU;
		$this->ram = $ram;
	}
}
/******************************* Concrete iPod Class Implementations *******************************/
class iPodClassic extends iPod {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
}
class iPodShuffle extends iPod {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
}
class iPodTouch extends iPod {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
}
class iPodNano extends iPod {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
}
/******************************* Concrete iPhone Class Implementations *******************************/
class iPhone4 extends iPhone {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
	public function call(){/* implementation goes here */}
	public function hangUp(){/* implementation goes here */}
	public function connectToInternet(){/* implementation goes here */}
}
class iPhone4S extends iPhone {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
	public function call(){/* implementation goes here */}
	public function hangUp(){/* implementation goes here */}
	public function connectToInternet(){/* implementation goes here */}
}
class iPhone5 extends iPhone {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
	public function call(){/* implementation goes here */}
	public function hangUp(){/* implementation goes here */}
	public function connectToInternet(){/* implementation goes here */}
}
class iPhone5S extends iPhone {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
	public function call(){/* implementation goes here */}
	public function hangUp(){/* implementation goes here */}
	public function connectToInternet(){/* implementation goes here */}
}
class iPhone6 extends iPhone {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
	public function call(){/* implementation goes here */}
	public function hangUp(){/* implementation goes here */}
	public function connectToInternet(){/* implementation goes here */}
}
class iPhone6Plus extends iPhone {
	public function play() {/* implementation goes here */}
	public function stop() {/* implementation goes here */}
	public function fastForward() {/* implementation goes here */}
	public function rewind() {/* implementation goes here */}
	public function call(){/* implementation goes here */}
	public function hangUp(){/* implementation goes here */}
	public function connectToInternet(){/* implementation goes here */}
}
/******************************* Concrete Computer Class Implementations *******************************/
class MacBookAir extends Computer {}
class MacBookPro extends Computer {}
class iMac extends Computer {}
class MacMini extends Computer {}
class MacPro extends Computer {}

$myiPod = iPodFactory::createiPod( 16, 'Touch', 'White', 'Developer Joe' );

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>