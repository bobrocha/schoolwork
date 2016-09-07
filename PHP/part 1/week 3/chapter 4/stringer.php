<?php
/*
This program demonstrates
the use of regular expressions
and string manipulations functions.

a) Diaplsy the character count and word count
b) Change the case of characters
c) Replace all vowels with asterisks
c) Split a proverb into an array
and display each word on a line
*/

// get form data
$name = ( isset($_POST['name']) ) ? $_POST['name'] : '' ;
$proverb = ( isset($_POST['proverb']) ) ? $_POST['proverb'] : '' ;


if( !empty($name) && !empty($proverb) ) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stringer</title>
</head>
<body>
	<div align="center">

		<?php

		echo "<p>The favorite saying of $name is...<br />
			  <i>$proverb</i><br />
			  That saying consists of "
			  . strlen( $proverb ) .
			  " characters and "
			  . str_word_count( $proverb ) .
			  " words.</p>

			  <p>As a heading or title it looks like this...<br /><i>"
			  . ucwords( $proverb ) .
			  "</i><br />
			  Or maybe like this...<br />"
			  . strtoupper( $proverb ) .
			  "</p>

			  <p>With the vowels replaced by stars, it looks like this...<br />"
			  . preg_replace( "/[aeiou]/i", "*", $proverb ) . 
			  "</p>

			  <p>Here are the individual words...<br />";

			  foreach( str_word_count($proverb, 1) as $word ) {
			  	echo "$word<br />";
			  }

			  echo "</p>";

		?>

	</div>
</body>
</html>



<?php
} else {
	echo "No data was submitted. Please <a href='stringer.html'>try again.</a>";
}
?>
