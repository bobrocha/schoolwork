#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

## '<' represents read-only

## read-only
#open( my $in, "<", $filename ) || die "$0: can't open $filename for reading: $!";

## apend
#open( my $log, ">>", "sex1t.txt" );

## write
# open( my $out, ">", "document.txt" );

## $! stores reason file failing to open

## write data to file
# print $handle $data;

# open file for reading
open( my $handle, ">docment.txt" ) or die "$!";

print $handle "data one\n";
print $handle "data two";