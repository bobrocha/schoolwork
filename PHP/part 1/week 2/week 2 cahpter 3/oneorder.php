<?php
/*
Search for customer name in text file,
if a match is found,
display order data in table
*/


// get customer name
$name = ( isset($_POST['customer_name']) ) ? $_POST['customer_name'] : '' ;

// read entire file into array
$lines = file( 'orders.txt' );
?>
<!DOCTYPE html>
<html>
<head>
	<title>Acme Grocery Store</title>
</head>
<body>
	<div align="center">
		<h3>Acme Grocery Store</h3>
		<h3>Retrieving One Order</h3>
		<table border="1">
			<tr>
				<th>Customer</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Phone</th>
				<th>Apples</th>
				<th>Bagels</th>
				<th>Croissants</th>
				<th>Payment</th>
			</tr>
			<?php

			// iterate over file array $lines and output data into table
			foreach( $lines as $line ) {
				$fields = explode( "\t", $line );
				if( in_array( $name, $fields) ) {
					echo "<tr>
							<td>$fields[0]</td>
							<td>$fields[1]</td>
							<td>$fields[2]</td>
							<td>$fields[3]</td>
							<td>$fields[4]</td>
							<td>$fields[5]</td>
							<td>$fields[6]</td>
							<td>$fields[7]</td>
							<td>$fields[8]</td>
						 </tr>";
				}
			}
			?>

		</table>
	</div>
</body>
</html>