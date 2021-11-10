<?php 

include_once("connect_db.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!empty($_POST))
{
	if (strlen($_POST['username']) < 3)
	{
		echo "Le nom est invalide.".PHP_EOL;
	}
	elseif ((filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) == false )
	{
		echo "L'email est invalide".PHP_EOL;
	}
	elseif (strlen($_POST['password']) < 3 )
	{
		echo "Le mot de pass est invalide.".PHP_EOL;
	}
	elseif ($_POST['password'] != $_POST['password_confirmation'])
	{
		echo "Les mots de passe ne sont pas identiques !";
	}


	else
	{

		$connection = connect_db();

		$emailControl = $connection->prepare("SELECT * FROM users WHERE email = '{$_POST["email"]}'");
		$emailControl->execute() or die(print_r($connection->errorInfo(), true));
        $emailExists = $emailControl->fetch (PDO::FETCH_ASSOC);
		

		if($emailExists != NULL)
		{
			echo 'Cette adresse mail est déjà utilisée !';
		}

		else
		{

			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$admin = $_POST['admin'] = 0;

			$sql = "INSERT INTO users (username, email, password, admin) VALUES (:username, :email, :password, :admin)";


			$test = $connection->prepare($sql);
			$test->bindParam(':username', $username);
			$test->bindParam(':email', $email);
			$test->bindParam(':password', $password);
			$test->bindParam(':admin', $admin);

			if ($test->execute() == false)
			{
				echo "Error.".PHP_EOL;
			}
			else
			{
				echo "User created.".PHP_EOL;
				header('Location: login.php');
			}

		}
	}	
}

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>inscription.php</title>
	</head>

	<body>

	<div class="bloc">
			<form method="post" action="">
				<fieldset>
				<legend><h1> Il était temps! </h1></legend>
				<input type="text" name="username" placeholder= "Nom d'utilisateur" minlength="3" maxlength="10"><br><br/>
				<input type="text" name="email" placeholder ="Email"><br><br/>
				<input type="password" name ="password" placeholder ="Mot de passe" minlength="3" maxlength="10"><br><br/>
				<input type="password" name="password_confirmation" placeholder="Confirmation de mot de passe" minlength="3" maxlength="10"></br></br>
				<input type="submit"  value="Envoyer"><br/><br/>
				<a href="login.php"> <input type="button" value="Tu es déjà inscris? Connecte toi !!"> </a>
				</fieldset>
			</form>
			
		</div>

	</body>
	</html>
