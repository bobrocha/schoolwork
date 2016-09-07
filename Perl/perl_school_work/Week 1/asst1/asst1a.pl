#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

# prompt user for first number
print "Please enter a number: ";

# first number
my $number1 = <STDIN>;

#remove newline
chomp($number1);

# prompt user for second number
print "Please enter another number: ";

#second number
my $number2 = <STDIN>;

#remove newline
chomp($number2);

# sum
my $sum = $number1 + $number2;

# difference
my $difference = $number1 - $number2;

# product
my $product = $number1 * $number2;

# quotient
my $quotient = $number1 / $number2;

print "$number1 + $number2 = $sum\n"; 

print "$number1 - $number2 = $difference\n";

print "$number1 X $number2 = $product\n";

print "$number1 / $number2 = $quotient\n";