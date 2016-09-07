#!c:\Dwimperl\perl\bin\perl.exe

use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
use DBI;
use strict;
use warnings;

#### read the form
my $student = param('student');

print "Content-type: text/html \n\n";

my $db = "DBI:mysql:cop1831:localhost";
my $dbh = DBI->connect($db,"root","",{RaiseError=>1});

my $sql = $dbh->prepare(qq(SELECT name, id, test1, test2, test3, TRUNCATE( AVG( (test1 + test2 + test3) / 3 ), 2 ) FROM grades WHERE name = "$student"));
$sql->execute;

print <<here;

<div align="center">
<h2>COP 1831 Grades</h2>
<table border ="2" bordercolor="green">
<tr>
<td>Name</td><td>Id#</td><td>Test 1</td><td>Test 2</td><td>Test 3</td><td>Average</td>
</TR>
here

my @record = $sql->fetchrow_array;  ### there is only one row in resultset

for(my $i = 0; $i < @record; $i++ ) {
    print "<td>$record[$i]</td>";
}
print "</tr>";

print "</table></div></body></html>";

$dbh->disconnect();
