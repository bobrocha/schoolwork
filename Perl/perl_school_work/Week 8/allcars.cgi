#!c:\Dwimperl\perl\bin\perl.exe

use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
use DBI;
use strict;
use warnings;

print "Content-type: text/html \n\n";

# connect to database
my $db = "DBI:mysql:cars:localhost";
my $dbh = DBI->connect( $db, 'root', '', {RaiseError => 1} );

# prepare statement and esecute it
my $sql = $dbh->prepare( qq( SELECT * FROM cars ORDER BY price DESC ) );
$sql->execute;


print <<here;

<div align="center">
<h2>Cars</h2>
<table border ="2" bordercolor="green">
<tr>
<td>ID</td><td>Year</td><td>Make</td><td>Model</td><td>Color</td><td>Price</td>
</tr>
here

while( my @record = $sql->fetchrow_array )
{
	for( my $i = 0; $i < @record; $i++ )
	{
		print "<td>$record[$i]</td>";
	}
	print "</tr>";
}

print "</table></div></body></html>";

$dbh->disconnect();