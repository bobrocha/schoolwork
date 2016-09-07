#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html\n\n";

# read values
my $upper = param( "upper" );
my $lower = param( "lower" );
chomp $upper;
chomp $lower;

# output range
print "<ul>\n";
while( $upper >= $lower )
{
	print "<li>$upper</li>\n";
	$upper -= 10;
}
print"</ul>";