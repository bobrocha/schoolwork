#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

# define an array
my @animals = ('Lion', 'Tiger', 'Jaguar', 'Leopard');

# total elements in the array
my $array_size = @animals;

my $last_element = $#animals;

print 'My name is Robert and one of my favorite animals is the: ' , $animals[scalar @animals - 4], ".\n" , ' Another animal which I find intriguing is the: ', $animals[$#animals -1], ".\n";

print 'My name is Robert and one of my favorite animals is the: ' , $animals[scalar $array_size - 4], ".\n" , ' Another animal which I find intriguing is the: ', $animals[$last_element -1], ".\n";

