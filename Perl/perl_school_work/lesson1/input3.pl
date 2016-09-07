#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

print "Enter the length of a rectangle ";
my $length = <STDIN>;
print "Enter the width of a rectangle ";
my $width = <STDIN>;

### numeric entries have to be chomped, too
chomp $length;
chomp $width;

my $area = $length * $width;
print "Length: $length, width: $width, area is $area. \n";