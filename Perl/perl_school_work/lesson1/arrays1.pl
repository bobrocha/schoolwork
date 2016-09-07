#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

### array names begin with @
my @scores = (82, 93, 88, 75);		

### elements are accessed with $ sign since each is a scalar
print "3rd element in array is $scores[2] \n";	### indexing starts at 0

### any element can be re-assigned and types can be mixed
$scores[1] = 'Larry';

print "@scores \n";	### prints all elements separated by a space