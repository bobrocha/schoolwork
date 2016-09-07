#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html\n\n";

# get data from form
my $name= param( 'name' );
my $ssn = param( 'ssn' );
my $password = param( 'password' );

# check name
( my $first, my $last ) = ( $name =~ /^(\w+) (\w+)$/ );

if( $first and $last )
{
	print " $last, $first<br />";
}

# check social
( my $social ) = ($ssn =~ /(\d{9})/);

if( $social )
{
	print substr( $social, 0, 3 ) . '-' . substr( $social, 3, 2) . '-' . substr( $social, 5, 4) . '<br />';
}

# check password
if( $password =~ /[A-Z]\d{2} [a-z]{2,3}[^a-zA-Z0-9]/ )
{
	print $password;
}