#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

my @scores = (82, 93, 88, 75);		

print "Index of last score is $#scores \n";	### a special variable

my @subscores = @scores[1..2];			### slices out 93 and 88

print @subscores,"\n";				### prints elements but not spaced

my @sorted_asc = sort(@scores);
my @sorted_desc = reverse(@sorted_asc);

print "@sorted_asc";
print "\n";
print "@sorted_desc \n";