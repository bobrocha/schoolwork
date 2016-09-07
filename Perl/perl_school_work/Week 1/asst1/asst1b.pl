#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

# array of six integers
my @integers = (1,2,3,4,5,6);

# size of array using special variable
my $array_size = $#integers + 1;

print @integers , "\n";
print "The array has $array_size elements.\n";





# sum of first two elements
print 'Element one + Element two = ' , $integers[0] + $integers[1], "\n";






# slice of all elements excluding first and last
my @slice = @integers[1..$#integers-1];

print "Here are the inner elements: " , @slice, "\n";

