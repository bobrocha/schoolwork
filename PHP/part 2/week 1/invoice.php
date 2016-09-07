<?php
// get form data
$invoice = ( isset($_POST['inv_numb']) ) ? $_POST['inv_numb'] : "";

if( empty($invoice) )
{
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Invoice Total</title>
	</head>
	<body>
		<div align="center">

			<form method="post" action="" >
				<table>
					<tr>
						<td>Invoice Number: </td>
						<td><input type='text' name='inv_numb' /></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type='submit' value='Process Form' /></td>
					</tr>
				</table>
			</form>

		</div>
	</body>
	</html>
<?php
}
else
{
	// connect to database
	$mysqli = new mysqli( 'localhost', 'root', '', 'retailing' );

	if( $mysqli->connect_error) {
		die( 'Connection Error: ' . $mysqli->connect_error );
	}

	// escape string
	$invoice = $mysqli->real_escape_string( $invoice );

	// run query
	if( $result = $mysqli->query("SELECT invoice_total($invoice) as total") ) {
		
		while( $row = $result->fetch_assoc() ) {

			if( $row['total'] === null ) {
				echo "No such invoice found. Please <a href='invoice.php'>try again.</a>";

			} else {

				echo "Total is: \$$row[total]";

			}
		}

		$result->close();

	} else {
		echo "No such invoice found. Please <a href='invoice.php'>try again.</a>";
	}

	$mysqli->close();
}
?>