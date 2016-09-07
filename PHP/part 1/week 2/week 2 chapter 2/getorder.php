<?php
/*
Search for customer name in text file,
if a match is found,
display order data
*/


// get customer name
$name = ( isset($_POST['customer_name']) ) ? $_POST['customer_name'] : '' ;

// open file for reading
$handle = @fopen( 'orders.txt', 'r' );

// make sure valid file pointer is returned and end of file has not been reached
if( $handle && !feof( $handle ) ) {
	while( ( $line = fgets( $handle ) ) !== false ) {
		$fields = explode( "\t", $line );
		if( in_array( $name, $fields ) ) {
			$line = implode( "\t", $fields);
			echo "<div align='center'>
					<h3>Acme Grocery Store</h3>
				    <h3>Retrieving Order</h3>
				    <p>$line</p>
				</div>";
		}
	}
}
fclose( $handle );
?>