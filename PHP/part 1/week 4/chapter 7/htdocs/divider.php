<?php
// include custom exception file
$includes_path = $_SERVER['DOCUMENT_ROOT'] . "/";
require_once "$includes_path../includes/divError.inc";

// get form data
$dividend = ( isset($_POST['dividend']) ) ? $_POST['dividend'] : '' ;
$divisor = ( isset($_POST['divisor']) ) ? $_POST['divisor'] : '' ;

// makte sure variables have content other than an empty string
if( $dividend != '' && $divisor != '' ) {


	try {


		// first check to see if provided variables have numeric values i.e. no letters
		if( !is_numeric( $dividend) || !is_numeric($divisor) ) {

			throw new NotANumber( 'Not A Number' );

		} else {

			// then check to see if divisor is 0
			try {

				if( $divisor == 0 ) {

					throw new DivByZero( 'Cannot Divide by Zero' );
				}
				echo "Result: $dividend &#247 $divisor = " . $dividend / $divisor;

			} catch( DivByZero $zero ) {

				echo "The following error occured: <i style='color: red'>{$zero->getMessage()}</i>, $zero";
			}

		}


	} catch( NotANumber $nan ) {

		echo "The following error occured: <i style='color: red'>{$nan->getMessage()}</i>, $nan";

	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Divider</title>
</head>
<body>

	<form method="post" action="">
		<table border="1">
			<tr>
				<td>Dividend</td><td>Divisor</td>
			</tr>
			<tr>
				<td><input type="text" name="dividend" /></td><td><input type="text" name="divisor" /></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Divide" />
	</form>
</body>
</html>