<?php
define("DB_DSN", "mysql:dbname=zipcodes");
define("DB_USERNAME", "root");
define("DB_PASSWORD", 91286);
define("DB_TABLE", "category");

$resource = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM category LIMIT :offSet, :qty";

$pdo_statement = $resource->prepare($sql);//This variable is now a PDOStatement object
$offSet = 0;
$qty = 100;
$pdo_statement->bindValue(":offSet", $offSet, PDO::PARAM_INT);//for some reason the datatype specification is very important or else the result will be an emty array
$pdo_statement->bindValue(":qty", $qty, PDO::PARAM_INT);
$pdo_statement->execute();

$allRows = $pdo_statement->fetchAll();//Contains all the records of the database
echo "<pre>";
//print_r($allRows);
foreach($allRows as $record)
{
	echo "<div><a href='#' style='font-family:calibri;background-color:#4C4C4C;color:white;border-bottom:1px dashed white;border-right:1px dashed white;padding:0.4em;text-align:center;width:450px;float:left;text-decoration:none;'>$record[cat_title]</a></div>";
}
echo "</pre>";
?>