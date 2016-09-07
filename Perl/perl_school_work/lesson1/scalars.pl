#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

### A first look at scalars and quotes

my $name = "Larry Wall";   	### a string assigned to a scalar variable
my $year = 1986;		### a number assigned to a scalar variable

print "$name invented Perl in $year \n";	# double quotes interpolate
print '$name invented Perl in $year \n';	# single quotes don't
print "\n$name is the 'father of Perl' \n";	# a good use for double quotes
