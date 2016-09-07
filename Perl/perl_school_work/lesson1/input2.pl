#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

### A second look at keyboard input. Compare to input1.pl
### A newline is included at the end of keyboard input
### The chomp function can remove it

print "Enter the name of your favorite actor \n";
my $actor = <STDIN>;	### STDIN is the keyboard in Perl

chomp $actor;		### removes the newline

### now the next statement outputs all on one line
print "$actor is your favorite actor \n";
