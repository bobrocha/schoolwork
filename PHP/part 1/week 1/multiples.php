<!DOCTYPE html>
<html>
<head>
	<title>Multiples</title>
</head>
<body>

	<form method="post" action="">
		<table>
			<tr>
				<td>Multiples of what integer?: </td><td><input type="text" name="number"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Display Multiples" />
	</form>
</body>
</html>
<?php

$number = isset($_POST['number']) ? $_POST['number'] : "";

echo "Here are the multiples of $number between 200 and 10:<ul>";

if( $number ) {
	for( $i = 200; $i >= 10; $i-- ) {
		if( $i % $number == 0 ) {
			echo "<li>" . ($i / $number ) * $number . "</li>";
		}
	}
}

echo "</ul>";
?>