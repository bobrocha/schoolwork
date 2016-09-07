#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

my $num1 = 20;
my $num2 = 30;

### print can handle a comma-separated list of items
print "The sum of $num1 and $num2 is ",$num1 + $num2, "\n";

### a period concatenates strings to strings and variable expressions
print "$num1 times $num2 = " . $num1 * $num2;

print "\n";	### ends the line created by above print

my $num3 = $num2 - $num1;

### but you can interpolate scalars inside double quotes, too
print "$num2 - $num1 is $num3 \n";
