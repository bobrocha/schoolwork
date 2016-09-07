<?php
class F
{
	public function create()
	{
		return new self;
	}
	public function estatico()
	{
		return new static;
	}
	public function tom()
	{
		return get_class();
	}
}

class G extends F
{
	public function bring()
	{
		return new parent;
	}
}
$a = new F;
$c = $a->create();


$b = new G;
$d = $b->bring();
$e = $b->estatico();

echo "<pre>";
echo get_class($c) . "<br />";
echo get_class($d) . "<br />";
echo get_class($e) . "<br />";
echo $a->tom();
echo "</pre>";
?>
