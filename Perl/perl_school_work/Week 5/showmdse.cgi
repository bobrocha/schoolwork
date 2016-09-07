#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;
use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html\n\n";

# open file for reading
open( my $handle, "<", "inventory.txt" ) or die "Error: $!";

# parse file and output it
print '<html><head><title>Inventory</title></head><body><h3 align="center">Inventory</h3><table border="1" align="center">';
while( my $record = <$handle> )
{
	# prepare fileds
	( my $sku, my $name, my $desc, my $price ) = split /\|/, $record;
	
	print "
		<tr><td align='center'>SKU:</td><td align='center'>$sku</td></tr>
		<tr><td align='center'>Name:</td><td align='center'>$name</td></tr>
		<tr><td align='center'>Description:</td><td align='center'>$desc</td></tr>
		<tr><td align='center'>Image:</td><td align='center'><img src='http://localhost/images/$name.jpg' /></td></tr>
		<tr><td align='center'>Price:</td><td align='center'>\$$price</td></tr>
		<tr><td colspan='2' style='background-color: black'>&nbsp;</td></tr>
		";
}
print '</table></body></html>';

close $handle;