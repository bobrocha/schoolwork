<!DOCTYPE html>
<html>
<head>
	<title>Acme Grocery Store</title>
</head>
<body>
	<?php
	echo "<div align='center'>
			  <h3>Today is " . date( 'l, F d, Y' ) .  "</h3>
		      <h3>Acme Grocery Store</h3>
		      <h3>Grocery Order Entry</h3>
		</div>";
	?>
	<form method="post" action="acme_3b.php" >
		<table border='1' align='center'>
			<tr align='center'>
				<td>Item</td><td>Quantity</td>
			</tr>
			<tr>
				<td>Apples @ $0.55 ea. </td><td><input type="text" name="apples"></td>
			</tr>
			<tr>
				<td>Bagels @ $0.69 ea. </td><td><input type="text" name="bagles"></td>
			</tr>
			<tr>
				<td>Croissants @ $0.75 ea. </td><td><input type="text" name="crois"></td>
			</tr>
			<tr>
				<td align='right'>Name</td><td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td align='right'>Address</td><td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td align='right'>City</td><td><input type="text" name="city"></td>
			</tr>
			<tr>
				<td align='right'>State</td><td><input type="text" name="state"></td>
			</tr>
			<tr>
				<td align='right'>Telephone</td><td><input type="text" name="tel"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" value="Place Order" /></td>
			</tr>
		</table>
	</form>
</body>
</html>