<?php 
if (isset($_POST))
{
	if (strlen($_POST['name']) < 3)
	{
		echo "Invalid name".PHP_EOL;
	}
	elseif ((filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) == false )
{
	echo "Invalid email".PHP_EOL;
}
elseif (strlen($_POST['password']) < 3 || strlen($_POST['password_confirmation']) < 3 || $_POST['password'] != $_POST['password_confirmation'])
{
	echo "Invalid password or password confirmation".PHP_EOL;
}


else
{
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


	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$password_confirmation = password_hash($_POST['password_confirmation'], PASSWORD_DEFAULT);
	$created_at = date ('m/d/Y h:i:s a');
	


	$sql = "INSERT INTO Users (name, email, password, password_confirmation, created_at) VALUES (:name, :email, :password, :password_confirmation, :created_at)";

	$test = $connection->prepare($sql);
	$test->bindParam(':name', $name);
	$test->bindParam(':email', $email);
	$test->bindParam(':password', $password);
	$test->bindParam(':password_confirmation', $password_confirmation);
	$test->bindParam(':created_at', $created_at);





	if ($test->execute() == false)
	{
		echo "Error.".PHP_EOL;
	}
	else
	{
		echo "User created.".PHP_EOL;
	}

}
}	

?>
<!DOCTYPE html>
<html>
<head>
	<title>inscription.php</title>
</head>
<body>
	<form method="post" action="">

		<input type="text" name="name" value= "Name" minlength="3" maxlength="10"><br>

		<input type="text" name="email" value ="Email"><br>
		<input type="password" name ="password" placeholder ="Password" minlength="3" maxlength="10"><br>
		<input type="password" name="password_confirmation" placeholder = "Password_confirmation"><br>
		<input type="submit" value="Submit"><br/>
		
	</form>
</body>
</html>

