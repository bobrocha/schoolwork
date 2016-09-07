<?php
$includes_path = $_SERVER['DOCUMENT_ROOT'] . "/";
require_once "$includes_path../includes/mystring.php";

$string = new MyString( 'Acme Web Design', 'red', 'Comic Sans MS', 6 );
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyString Example</title>
</head>
<body>
	<?php

	echo "<p>The String is :  {$string->getStr()} <br />
	         As formatted: {$string->getDec()} </p>";

	$string->chge_color( 'green' );

	echo "<p>After change: {$string->getDec()}</p>";
	?>
</body>
</html>