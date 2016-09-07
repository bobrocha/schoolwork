<?php
class Product {
	public $name;
	public $price;

	public function __construct( $name, $price ) {
		$this->name = $name;
		$this->price = $price;
	}

}

class ProcessSale {
	private $callbacks;

	public function registerCallback( $callback ) {
		if( ! is_callable( $callback ) ) {
			throw new Exception( "callback not callable" );
		}

		$this->callbacks[] = $callback;
	}

	public function sale( $product ) {
		print "{$product->name}: processing <br>";

		foreach( $this->callbacks as $callback ) {
			call_user_func( $callback, $product );
		}
	}
}

$logger = function( $product ){ print "logging ({$product->name})<br>"; };

class Mailer {
	public function doMail( $product ) {
		print "mailing ({$product->name})<br>";
	}
}

class Totalizer {
	public static function warnAmount( $amt ) {
		$count = 0;

		return function( $product ) use ( $amt, &$count ) {
			$count += $product->price;

			print "count: $count<br>";

			if( $count > $amt ) {
				print "high price reached: {$count}<br>";
			}
		};
	}
}

$processor = new ProcessSale();
$processor->registerCallback( Totalizer::warnAmount( 8 ) );
$processor->sale( new Product( "shoes", 6 ) );
$processor->sale( new Product( "coffee", 6 ) );
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>