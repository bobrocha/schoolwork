<?php
// define price constants
define( 'APPLE_PRICE', 0.55 );
define( 'BAGLE_PRICE', 0.69 );
define( 'CROIS_PRICE', 0.75 );

// get form data
$apples_qty = ( isset($_POST['apples']) ) ? $_POST['apples'] : '' ;
$bagles_qty = ( isset($_POST['bagles']) ) ? $_POST['bagles'] : '';
$crois_qty = ( isset($_POST['crois']) ) ? $_POST['crois'] : '';
$name = ( isset($_POST['name']) ) ? $_POST['name'] : '';
$address = ( isset($_POST['address']) ) ? $_POST['address'] : '';
$city = ( isset($_POST['city']) ) ? $_POST['city'] : '';
$state = ( isset($_POST['state']) ) ? $_POST['state'] : '';
$tel = ( isset($_POST['tel']) ) ? $_POST['tel'] : '';

// calculate total
$total = ($apples_qty * APPLE_PRICE) + ($bagles_qty * BAGLE_PRICE) + ($crois_qty * CROIS_PRICE);

// prepare data for writing
$data = "$name\t$address\t$city\t$state\t$tel\t$apples_qty\t$bagles_qty\t$crois_qty\t$total\n";

// write data to file
file_put_contents( 'orders.txt', $data, FILE_APPEND );

?>
<!DOCTYPE html>
<html>
<head>
	<title>Acme Grocery Store</title>
</head>
<body>
	<div align="center">
		<h3>Acme Grocery Store</h3>
		<h3>Here is your order</h3>
		
		<table border='1'>
			<tr>
				<th>Item</th><th>Quantity</th><th>Cost</th>
			</tr>
			<tr align="center">
				<td>Apples @ $0.55 ea.</td><td><?php echo "$apples_qty</td><td>$" . $apples_qty * APPLE_PRICE . "</td>"; ?>
			</tr>
			<tr align="center">
				<td>Gagles @ $0.69 ea.</td><td><?php echo "$bagles_qty</td><td>$" . $bagles_qty * BAGLE_PRICE . "</td>"; ?>
			</tr>
			<tr align="center">
				<td>Croissants @ $0.75 ea.</td><td><?php echo "$crois_qty</td><td>$" . $crois_qty * CROIS_PRICE . "</td>"; ?>
			</tr>
		</table>

		<?php echo "<h4>Please Pay: \$$total</h4>" ?>

		<h4>Groceries will be delivered to:</h4>
		<?php
		echo "<address>
			  $name<br />
			  $address<br />
			  $city, $state<br />
			  Ph: $tel
			 </address>
			 <h4>Thanks for shopping at Acme</h4>";
		?>
	</div>
</body>
</html>