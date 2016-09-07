<?php
class DivByZero extends Exception {


	public function __toString() {
		return "Line number that made the exception: " . $this->getLine() . " please try again.";
	}
}

class NotANumber extends Exception {
	public function __toString() {
		return "Line number that made the exception: " . $this->getLine() . " please try again.";
	}
}
?>