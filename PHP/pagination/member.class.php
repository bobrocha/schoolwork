<?php
include "database.class.php";
//This class will encapsulate the result of a database query in an object by means of the array returned by the fetch or fetchAll method
class Member extends Database
{
	protected $data = array(
	"id" => "",
	"username" => "",
	"password" => "",
	"firstName" => "",
	"lastName" => "",
	"joinDate" => "",
	"gender" => "",
	"favoriteGenre" => "",
	"emailAddress" => "",
	"otherInterests" => ""
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
		$PDOStatement = $connection->query("SELECT * FROM members WHERE id = $id");
		$result = $PDOStatement->fetch(PDO::FETCH_ASSOC);
		$this->disconnect($connection);
		return $result;//Returns a row(array) from the table using the PDOStatement object
	}
	
	public function getMembers()
	{
		$connection = $this->connect();
		$PDOStatement = $connection->query("SELECT * FROM members");
		$fullResult = $PDOStatement->fetchAll();//This will return an array that has as its elements other arrays for each row
		$members = array();
		foreach($fullResult as $row)//Loop through the full result passing the array $row to the Member constructor to fill the object
		$members[] = new Member($row);
		return $members;//Because this function returns an array of objects you have to use the built-in functions to get the field values 
	}
}
$a = new Member(array());
$result = $a->getMembers();//Represents an array of objects filled in by the Member class itself

echo "<table border='1' style='border-collapse:collapse'>
<tr>
<th>Id</th><th>Username</th><th>Password</th><th>First name</th><th>Last name</th><th>Join date</th><th>Gender</th><th>Favorite genre</th><th>Email Address</th><th>Other Interests</th>
</tr>";
$count = 0;
foreach($result as $member)//in here $member is an object and array element of the array "$result", with methods and properties
{
	$count++;
?>
<tr <?php if($count % 2 == 0)echo "style='background-color:#CCCCCC'"; ?>>
	<td><?php echo $member->getValue("id") ?></td><td><?php echo $member->getValue("username") ?></td><td><?php echo $member->getValue("password") ?></td><td><?php echo $member->getValue("firstName") ?></td><td><?php echo $member->getValue("lastName") ?></td><td><?php echo $member->getValue("joinDate") ?></td><td><?php echo $member->getValue("gender") ?></td><td><?php echo $member->getValue("favoriteGenre") ?></td><td><?php echo $member->getValue("emailAddress") ?></td><td><?php echo $member->getValue("otherInterests") ?></td>
</tr>
<?php
}
echo "</table>";
echo "<pre>";
#print_r($result);
//echo $result[0]->getValue("username");
echo "</pre>";
?>