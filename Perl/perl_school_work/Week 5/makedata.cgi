#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;
use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html\n\n";

# read form data
my $sku = param( "sku" );
my $name = param( "name" );
my $desc = param( "desc" );
my $price = sprintf( "%.2f", param( "price" ) );

# format data for writing
my $string = "$sku|$name|$desc|$price";

# open file for appending
open( my $handle, ">>", "inventory.txt" ) or die "Error: $!";

# write data and close file
print $handle "$string\n";
close $handle;

print '<a href="http://localhost/makedata.html">Add another item</a> | <a href="showmdse.cgi">View Inventory</a>';