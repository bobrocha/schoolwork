<?php
class A
{
	public $name = "Livier Albanes";
	public function who()
	{
		$love = new self;
		echo "I think " . $love->name . " is pretty!";
	}
}

$v = new A;
$v->who();
?>
