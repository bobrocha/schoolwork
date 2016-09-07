#!c:\Dwimperl\perl\bin\perl.exe
use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
use strict;
use warnings;
print "Content-type: text/html\n\n";

# parse cookie for display
my @cookie = split( / /, cookie( 'settings' ) );

print "<html>
		<head>
			<title>Members Area</title>
		</head>
		<body bgcolor='@cookie[$#cookie]'>
		<h1>Welcome, $cookie[0] $cookie[1].</h1>
		<h2>Membership type: $cookie[2]</h2>
		</body>
	</html>";