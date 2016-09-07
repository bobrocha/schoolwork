<?php
require_once "database.class.php";
//This class will encapsulate the result of a database query in an object by means of the array returned by the fetch or fetchAll method
class Member extends Database
{
	protected $data = array(
	"cat_id" => "",
	"cat_title" => "",
	"cat_pages" => "",
	"cat_subcats" => "",
	"cat_files" => "",
	"cat_hidden" => ""
	);
	public function __construct(array $resultArray)
	{
		foreach($resultArray as $key => $value)//Loop through the external array to see if its keys match those that are expected.
		{
			if(array_key_exists($key, $this->data))
			{
				$this->data[$key] = $value;//If the keys match the expected keys then assign the data to the internal array
			}
		}
	}
	public function getValue($field)//Note: this function is meant to be use in relation to a call to getMembers(). The function getMembers() returns an array of objects and this function takes advantage of that to retrieve the individual fields 
	{
		if(array_key_exists($field, $this->data))
		return $this->data[$field];
	}
	public function getById($id)
	{
		$connection = $this->connect();
		$PDOStatement = $connection->query("SELECT * FROM category WHERE id = $id");
		$result = $PDOStatement->fetch(PDO::FETCH_ASSOC);
		$this->disconnect($connection);
		return $result;//Returns a row(array) from the table using the PDOStatement object
	}
	
	public function getMembers($start, $end)
	{
		$connection = $this->connect();
		$PDOStatement = $connection->query("SELECT SQL_CALC_FOUND_ROWS * FROM category limit $start, $end");
		$fullResult = $PDOStatement->fetchAll();//This will return an array that has as its elements other arrays for each row
		$members = array();
		foreach($fullResult as $row)//Loop through the full result passing the array $row to the Member constructor to fill the object
		$members[] = new Member($row);
		$newPDOStatement = $connection->query("SELECT found_rows() as totalRows"); //Here we use the alais "as" to change the column name from "found_rows()" to "totalRows"
		$totalRows = $newPDOStatement->fetch(PDO::FETCH_ASSOC);
		return array($members, $totalRows);//Because this function returns an array of objects you have to use the built-in functions to get the field values 
		//This function returns an array of values. $members is an array in itself and $totalRows is also an array. Because the first element of this array is also ana array of objects you have to use the object methods to get the individual values
	}
}
?>