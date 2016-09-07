<?php
/*
This program is linked to retrieve.hmlt. It
searches the customers table for specific
record(s) by custid, name, or city. The results are
displayed in tabular form
*/

// get form data
$field = ( isset($_POST['field']) ) ? $_POST['field'] : '' ;
$item = ( isset($_POST['item']) ) ? $_POST['item'] : '' ;

// only run if form fields were filled out
if( !empty($field) && !empty($item) ) {

	//connect to the database
	$mysqli = new mysqli( 'localhost', 'root', '', 'pcparts' );

	// check connection
	if( mysqli_connect_errno() ) {

		echo "Connection failed: " . mysqli_connect_error();
		exit();

	}

	/*
	To prevent the infamous hack known
	as SQL injection prepared statements
	were used.
	*/

	// create prepared statment
	$field = $mysqli->real_escape_string( $field );
	$sql = "SELECT `custid`, `name`, `address`, `city`, `state`, `zip`
			FROM `customers`
			WHERE `$field` = ?";

	if( $statement = $mysqli->prepare( $sql ) ) {

		$statement->bind_param('s', $item);
		$statement->execute();
		$result = $statement->get_result();
		$statement->close();

		// if there is a result display it
		if( $result->num_rows ) {

			echo "<table border='1'>
					  <tr>
					  	<th>Custid</th>
					  	<th>Name</th>
					  	<th>Address</th>
					  	<th>City</th>
					  	<th>State</th>
					  	<th>Zip</th>
					  </tr>";

			while( $row = $result->fetch_assoc() ) {

				echo "<tr>";

				foreach( $row as $record) {

					echo "<td>$record</td>";

				}

				echo "</tr>";

			}
			echo "</tr></table>";

		} else {

			echo "No matches found. Please <a href='retrieve.html'>try again</a>.";
		}

	}

	$mysqli->close();

}
?>