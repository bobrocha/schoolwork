#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;


print "Please enter a number :\n";




chomp($number);


my $count = 200;

{
	if( $count % $number == 0 )
	{
		print ( ($count / $number) * $number, "\n");
	}
	$count--;
}