<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Calculator</title>
</head>
<body>

	<?php if( empty($_POST['submit']) ) { ?>

	<form method="post" action="">
		<table>
			<tr>
				<td>Appetizer Cost: </td><td><input type="text" name="app"></td>
			</tr>
			<tr>
				<td>Beverage Cost: </td><td><input type="text" name="drink"></td>
			</tr>
			<tr>
				<td>Entree Cost: </td><td><input type="text" name="entree"></td>
			</tr>
			<tr>
				<td>Dessert Cost: </td><td><input type="text" name="dessert"></td>
			</tr>
		</table>
		<input type="submit" name="submit" />
	</form>

	<?php } else {
		# extract form variables
		extract( $_POST );

		$subtotal = $app + $drink + $entree + $dessert;

		$gratuity = $subtotal * .15;

		$total = $subtotal + $gratuity;

		echo "<strong>Subtotal:</strong> \$$subtotal<br />
			  <strong>15% Gratuity:</strong> \$$gratuity<br />
			  <strong>Total:</strong> \$$total"; 
	}
	?>
</body>
</html>