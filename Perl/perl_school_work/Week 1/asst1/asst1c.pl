#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

# hash of fruits
my %fruits = (
		apples => 3,
		bananas => 1,
		oranges => 2);
		
print "Number of bananas: $fruits{'bananas'}\n";

# get key from user
print "Which fruit do you wish to query?\n";

my $key = <STDIN>;

# remove newline
chomp($key);

print "Number of $key is: $fruits{$key}\n";



# array of hash keys
my @keyz = keys(%fruits);

print "Here are the fruits: @keyz\n";