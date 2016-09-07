#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

my $str = "tom|is|here";

(my $name, my $verb1, my $verb2) = split /\|/, $str;

my $format = sprintf( "%.2f", "2" );

print $format;