<?php
/*
* class for manipulating strings
*/
class MyString {

	private $string;
	private $color;
	private $fontFace;
	private $fontSize;

	public function __construct( $string, $color, $fontFace, $fontSize ) {
		$this->string = $string;
		$this->color = $color;
		$this->fontFace = $fontFace;
		$this->fontSize = $fontSize;
	}

	// returns unformatted string
	public function getStr() {
		return $this->string;
	}

	/*
	* returns a "decorated" string in its color,
	* font face, and font size using the 
	* HTML <span> tag set and CSS for styling
	*/
	public function getDec() {
		return "<span style='
			   color:{$this->color};
			   font-family:{$this->fontFace};
			   font-size:{$this->fontSize}em'>

		        	{$this->string}

		        </span>";
	}

	// changes the color of the string
	public function chge_color( $color ) {
		$this->color = $color;
	}

	// used to set properties in the class
	public function __set( $name, $value ) {
		$this->$name = $value;
	}
}
?>