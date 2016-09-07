#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

# array of integers
my @integers = (10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

# print integers on one line
foreach( @integers )
{
	print "$_ ";
}

# new line for clarity
print "\n";

# reverse order of array on one line
for( my $i = 0, my $elemNum = $#integers; $i < @integers; $i++)
{
	print "$integers[$elemNum] ";
	$elemNum--;
}