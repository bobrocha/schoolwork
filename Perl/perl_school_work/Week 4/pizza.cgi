#!c:\Dwimperl\perl\bin\perl.exe

use strict;
use warnings;

use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html\n\n";

# available pizza sizes
my %pizzas = (
		regular => '6.00',
		large => '8.00',
		family => '11.00'
		);
		
# determine pizza
my $pizza = param( "size" );

# toppings array
my @toppings = param( "topping" );

# additional info
my $name = param( "name" );
my $tel = param( "tel" );
my $address = param( "address" );

# calcualte total
my $total = $pizzas{$pizza} + @toppings * 1.25;

# display data
print "<h2>Your Order at Pizza Pizzas:</h2>";
print "Size selected: $pizza \$$pizzas{$pizza}<br /><br />";
print "Toppings selected:<br />";
print "<ul>";
foreach my $topping( @toppings )
{
	print "<li>$topping \$1.25</li>";
}
print"</ul>";
print "<h4>Total due: \$$total</h4>";

print "<h4>Delivery information:</h4>";
print "<p>Customer name: $name</p>";
print "<p>Address: $address</p>";
print "<p>Telephone: $tel</p>";