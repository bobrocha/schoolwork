#!c:\Dwimperl\perl\bin\perl.exe

use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
use DBI;
use strict;
use warnings;

# get form data
my $year = param( 'year' );
my $make = param( 'make' );
my $model = param( 'model' );
my $color = param( 'color' );
my $price = param( 'price' );

print "Content-type: text/html \n\n";

# connect to database
my $db = "DBI:mysql:cars:localhost";
my $dbh = DBI->connect( $db, 'root', '', {RaiseError => 1} );

# prepare statement, esecute it, and disconnect from database
my $sql = $dbh->prepare( qq( INSERT INTO cars (year, make, model, color, price) VALUES ("$year", "$make", "$model", "$color", "$price") ) );
$sql->execute;
$dbh->disconnect();

print "<a href='http://localhost/car_entry.html'>Insert Another Record</a><br /><a href='http://localhost/cgi-bin/allcars.cgi'>View All Cars</a>";