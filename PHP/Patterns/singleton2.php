<?php
class LimitedEditionBuggati {
	private $props = array(
							'speed' 	=> 256,
							'cylinders'	=> 18,
							'color'		=> 'metalic silver',
							'hp'		=> 1200,
							'price'		=> 5000000,
							'vin'		=> 'the one'
						   );
	private static $instance;

	private function __construct(){}

	public static function instance() {
		if( empty($instance) ) {
			self::$instance =  new LimitedEditionBuggati();
		}
		return self::$instance;
	}

	public function getProperty( $property ) {
		return $this->props[$property];
	}
}

$myCar = LimitedEditionBuggati::instance();
echo $myCar->getProperty( 'speed' );
echo "<pre>";
print_r( $GLOBALS );
echo "</pre>"
?>