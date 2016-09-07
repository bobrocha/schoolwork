<?php
/*
This program searches for orders created
by a customer in the database
*/

// get form data
$name = ( isset($_POST['name']) ) ? $_POST['name'] : '' ;

if( empty($name) ) {

?>
<html>
<head>
	<title>Customer Orders</title>
</head>
<body>
	<p>Enter customer name to search by (lastname, firstname format):</p>
	<form method="post" action="">
		<input type="text" name="name" />
		<input type="submit" value="Search" />
	</form>
</body>
</html>

<?php

} else {

	//connect to the database
	$mysqli = new mysqli( 'localhost', 'root', '', 'pcparts' );

	// check connection
	if( mysqli_connect_errno() ) {

		echo "Connection failed: " . mysqli_connect_error();
		exit();

	}

	$custidSQL = "SELECT custid, name
				  FROM customers
				  WHERE name = ?";

	if( $stmt = $mysqli->prepare($custidSQL) ) {

		$stmt->bind_param('s', $name);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();

		if( $result->num_rows ) {

			$r = $result->fetch_assoc();
			$custid = $r['custid'];
			$name = $r['name'];

			$sql = "SELECT orders.orderid, customers.name, orders.date
				   FROM orders, customers
	               WHERE orders.custid = $custid
	               AND customers.name = '$name'";

	         /*
	          Since the prepared statement took care of the
	          first security issue we can perform a regular query
	         */

	          if( $res = $mysqli->query($sql) ) {

	          	if( $res->num_rows ) {


		          	echo "<table border='1'>
		          		  <tr>
		          		  	<th>Order ID</th>
		          		  	<th>Name</th>
		          		  	<th>Date</th>
		          		  </tr>";

		          		while( $row = $res->fetch_assoc() ) {

		          			echo"<tr>
		          					<td>$row[orderid]</td>
		          					<td>$row[name]</td>
		          					<td>$row[date]</td>
		          				 </tr>";
		          		}

		          		echo "</table>";

		          	} else {

		          		echo "No orders found for $name. <a href='custorders.php'>Search again.</a>";
		          	}

	          }
		} else {

			echo "\"$name\" not found in database records. Please <a href='custorders.php'>try again.</a>";
		}
	}

	$mysqli->close();

}
?>