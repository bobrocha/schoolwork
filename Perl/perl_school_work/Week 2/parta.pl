#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

# get number from user
print "Please enter a number :\n";

my $number = <STDIN>;

# remove newline char
chomp($number);

# initialize where to count from
my $count = 200;
while( $count >= 100 )
{
	if( $count % $number == 0 )
	{
		print ( ($count / $number) * $number, "\n");
	}
	$count--;
}
