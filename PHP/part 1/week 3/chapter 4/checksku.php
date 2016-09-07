<?php
/*
This program validates
an SKU against a regex
*/


// get form data
$sku = ( isset($_POST['sku']) ) ? $_POST['sku'] : '' ;

// validate sku
$pattern = "/^[A-Z]{2,3}[1-9]{1}[0-9]{1,3}[a-z]{2,} [^a-zA-Z0-9][A-Z]$/";

//$pattern = "/^[A-Z]{2,3}[1-9]{1}[0-9]{1,3}[a-z]{2,} [^a-zA-Z0-9][A-Z]$/";
if( !empty( $sku ) ) {
	if( !preg_match( $pattern, $sku ) ) {
		echo "Invalid sku, please try again.";
	} else {
		echo "SKU: " . htmlentities( $sku ) . " is valid.";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SKU Validator</title>
</head>
<body>
	<div align="center">
		<p>Enter SKU to validate</p>

		<form method="post" action="" >
			<table>
				<tr>
					<td>SKU: </td>
					<td><input type='text' name='sku' /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type='submit' value='Validate' /></td>
				</tr>
			</table>
		</form>
	</div>
	<h3>Rules For SKU</h3>
		<ul>
			<li>begins with two or three upper case letters</li>
			<li>followed by from 2 to 4 digits (but the first digit cannot be a zero)</li>
			<li>followed by 2 or more lower case characters and a single space</li>
			<li>followed by a single character that is not an alphabet letter or digit</li>
			<li>end with an upper case letter</li>
		</ul>
</body>
</html>