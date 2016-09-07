#!c:\Dwimperl\perl\bin\perl.exe
use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
use strict;
use warnings;

# array of membership types
my @memberships = ( 'Life', 'Annual', 'Trial' );

# hash of colors
my %colors = (
		rd	=> 'red',
		gr	=> 'green',
		bl	=> 'blue',
		bw	=> 'brown',
		og	=> 'orange',
		bk	=> 'black',
		yl	=> 'yellow'
		);

# get form data
my $name = param( 'name' );

my $membership = param( 'member' );

my $color = param( 'color' );

# set up cookie values
my @cookies = ( $name, $memberships[$membership], $colors{$color} );

# store values in cookie
my $cookie = cookie(
		    -name 	=> 'settings',
		    -value 	=> "@cookies",
		    -expires	=> '+7d',
		    -path	=> '/'
		    );
		    
print header( -cookie => $cookie);

# display link to customized area
print "Information recorded! <a href='custom.cgi'>See member page</a>";