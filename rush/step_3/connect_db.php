<?php 

function connect_db()
{
	try
	{
		$connection = new PDO('mysql:host=localhost;dbname=pool_php_rush;port=3306','Jean', 'coding');   
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch (PDOException $e) 
	{
		die(ERROR_LOG_FILE.$e->getMessage());
	}
	return $connection;
}
?>