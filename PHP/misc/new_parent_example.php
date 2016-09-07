<?php
class A
{
	protected $name = "Will Jones";
}

class B extends A
{
	public function t()
	{
		$a = new parent;
		echo $a->name;
	}
}

$z = new B;
$z->t();
?>
