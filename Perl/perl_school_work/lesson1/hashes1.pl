#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

### a hash is an UNORDERED group of key-value pairs
my %food = ('fruit' => 'apple',
	 'veggie' => 'broccoli',
	 'salad' => 'caesar',
	 'dessert' => 'cake' );
	 
### values are accessed by their keys inside { }. Keys must be unique.
print "He didn't eat his $food{'veggie'}. \n";

### the keys and values functions can put all keys or values in an array
my @values = values %food;
print "The foods are @values \n";