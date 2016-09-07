<?php
/**
* This is an attempt at the Factory Method Pattern
* It emulates the Client--Factory--Product logical model
* and also the client
*					       Product<--ConcreteProduct
*                          ^
*		   Client ----|    | 
*					  |    |
*					  --->  Factory<--ConcreteFactory
**/

/** contract for all flyable vehicles **/
interface iFlyable {
	public function fly();
}

/* concrete implementations of iFlyable interface */
class JumboJet implements iFlyable {
	public function fly() {
		return "Flying 747!";
	}
}

class FighterJet implements iFlyable {
	public function fly() {
		return "Flying an F22!";
	}
}

class PrivateJet implements iFlyable {
	public function fly() {
		return "Flying a Lear Jet!";
	}
}

/** contract for conrete Factory **/
/**
* "Define an interface for creating an object, but let the classes that implement the interface
* decide which class to instantiate. The Factory method lets a class defer instantiation to
* subclasses."
**/
interface iFlyableFactory {
	public static function create( $flyableVehicle );
}

/** concrete factory **/
class JetFactory implements iFlyableFactory {
	/* list of available products that this specific factory makes */
	private  static $products = array( 'JumboJet', 'FighterJet', 'PrivateJet' );

	public  static function create( $flyableVehicle ) {
		if( in_array( $flyableVehicle, JetFactory::$products ) ) {
			return new $flyableVehicle;
		} else {
			throw new Exception( 'Jet not found' );
		}
	}
}

$militaryJet = JetFactory::create( 'FighterJet' );
$privateJet = JetFactory::create( 'PrivateJet' );
$commercialJet = JetFactory::create( 'JumboJet' );
echo $militaryJet->fly();

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>