#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

### A first look at keyboard input. Compare to input2.pl.

print "Enter the name of your favorite actor \n";
### the 'angle operator' <> is used to read input from keyboard/files
my $actor = <STDIN>;	### STDIN is the keyboard in Perl

print "$actor is your favorite actor \n";

### see input2.pl for fixing the output