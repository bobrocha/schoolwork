<?php
function display_nines_table() {
	# this program displays the 9 times table

	echo "<table border='1'>
			<tr>
				<th>Factors</th><th>Products</th>
			</tr>";

	for( $i = 1; $i <= 12; $i++ ) {
		echo "<tr align='center'>
				 <td>9 X $i</td><td>" . $i * 9 . "</td>
			  </tr>";
	}

	echo "</table>";
}
?>