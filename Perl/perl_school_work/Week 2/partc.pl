#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

# hash of states and their capitals
my %states = (
		Florida => "Tallahasee",
		Texas => "Austin",
		California => "Sacramento",
		Montana => "Helena",
		Arizona => "Phoenix",
		Maine => "Augusta",
		Nebraska => "Lincoln");

# output states as keys and capitals as values
foreach my $key ( keys %states ){
	print "$key -> $states{$key}\n";
}

# promtp user for a state name
print "\nPlease enter a state name\n";

my $state = <STDIN>;
chomp($state);

# display capital of entered state
print "The capital of $state is $states{$state}\n";