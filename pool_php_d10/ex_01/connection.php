<?php 

try
{
	$connection = new PDO('mysql:host=localhost;dbname=bdd;port=3306','Jean', 'coding');
	echo 'Connexion réussie !'.PHP_EOL;
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
	die(ERROR_LOG_FILE.$e->getMessage());
}


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$password_confirmation = password_hash($_POST['password_confirmation'], PASSWORD_DEFAULT);


$sql = "INSERT INTO Users (id, name, email, password, password_confirmation) VALUES (:id, :name, :email, :password, :password_confirmation)";

$test = $connection->prepare($sql);
$test->bindParam(':id', $id);
$test->bindParam(':name', $name);
$test->bindParam(':email', $email);
$test->bindParam(':password', $password);
$test->bindParam(':password_confirmation', $password_confirmation);



if ($test->execute() == false)
{
	echo "Error.".PHP_EOL;
}
else
{
	echo "User created.".PHP_EOL;
}
