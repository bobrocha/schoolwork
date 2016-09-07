<?php
namespace Top
{
    $a = "Robert";
    $b = "Richard";
    $c = "Maurice";
    function get_a()
    {
		global $a;
		return $a;
    }
    function get_b()
    {
		global $b;
		return $b;
    }
    function get_c()
    {
		global $c;
		return $c;
    }
}

namespace Top\Middle
{
    $a = "Dauraun";
    $b = "Khalid ";
    $c = "Humberto";
    function get_a()
    {
        global $a;
        return $a;
    }
    function get_b()
    {
        global $b;
        return $b;
    }
    function get_c()
    {
        global $c;
        return $c;
    }
	
	echo namespace\get_a();
}

namespace Top\Middle\Bottom
{
    $a = "Terry";
    $b = "Jesse";
    $c = "Chris";
    function get_a()
    {
        global $a;
        return $a;
    }
    function get_b()
    {
        global $b;
        return $b;
    }
    function get_c()
    {
        global $c;
        return $c;
    }
}
?>