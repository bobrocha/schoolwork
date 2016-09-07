#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html\n\n";

# read form data
my $temp = param("temp");
my $distance = param("distance");
chomp($temp);
chomp($distance);

# print results

# temp
printf "$temp degrees Fahrenheit is %.1f ", ( ( $temp - 32 ) / 1.8000 );
print "degrees Celsius<br />";

# distance
printf "$distance miles is %.3f", $distance * 1.609344;
print " kilometers";