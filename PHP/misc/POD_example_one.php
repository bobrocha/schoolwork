<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MySql</title>
</head>
<body>
<?php
$dsn = "mysql:host=localhost;dbname=zipcodes";
$username = "root";
$password = 91286;

try
{
	$connection = new PDO($dsn, $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

$sql = "SELECT * FROM category LIMIT 30";
$rows = $connection->query($sql);
echo "<table border='1' style='border-collapse:collapse;font-family:arial;font-size:0.8em;'>";
echo "<tr style='background-color:tan'><th>Category ID</th><th>Category Title</th><th>Category Pages</th><th>Category Sub-categories</th><th>Category Files</th><th>Category Hidden</th></tr>";
foreach($rows as $row)
{
	echo "<tr>
			<td style='text-align:center'>$row[cat_id]</td><td>$row[cat_title]</td><td style='text-align:center'>$row[cat_pages]</td><td style='text-align:center'>$row[cat_subcats]</td><td style='text-align:center'>$row[cat_files]</td><td style='text-align:center'>$row[cat_hidden]</td>
		</tr>";
}

echo "</table>";
?>
</body>
</html>