#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

my @a = (1,2,3);

my $aref = \@a;

print @{$aref}[0] . "\n";