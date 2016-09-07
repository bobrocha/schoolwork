<?php
class Database
{
	private $dsn = "mysql:dbname=mydatabase";
	private $username = "root";
	private $password = 91286;
	
	//This function represents a database connection
	protected function connect()
	{
		try
		{
			$connection = new PDO($this->dsn, $this->username, $this->password);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$connection->setAttribute(PDO::ATTR_PERSISTENT, true);
		}
		catch(PDOException $e)//If unable to connect catch and throw the exception
		{
			die("Connection failed... check line number " . $e->getLine(). "-----" . $e->getMessage());
		}
		return $connection;//Returns the connection as a PDO object
	}
	
	protected function disconnect($connection)
	{
		$connection = NULL;
	}
}
?>