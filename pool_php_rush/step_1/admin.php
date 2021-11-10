<?php 
include_once("connect_db.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




if (!empty($_POST))
{
	if (strlen($_POST['username']) < 3)
	{
		echo "Nom incorrect".PHP_EOL;
	}
	elseif ((filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) == false )
	{
		echo "Email incorrect".PHP_EOL;
	}
	elseif (strlen($_POST['password']) < 3 )
	{
		echo "Mot de passe incorrect".PHP_EOL;
	}
	elseif ($_POST['password'] != $_POST['password_confirmation'])
	{
		echo "Les mots de passe ne sont pas identiques. NOOB !";
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
			$admin = $_POST['admin'];

			$create = "INSERT INTO users (username, email, password, admin) VALUES (:username, :email, :password, :admin)";


			$test = $connection->prepare($create);
			$test->bindParam(':username', $username);
			$test->bindParam(':email', $email);
			$test->bindParam(':password', $password);
			$test->bindParam(':admin', $admin);

			if ($test->execute() == false)
			{
				echo "La création d'utilisateur a echoué.";
			}
			else
			{
				echo "L'Utilisateur a bien été créé.";
			}

		}
	}	
}

$connection = connect_db();
$sql = "SELECT * FROM users";
$select = $connection->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Admin</title>
</head>

<body>
	<div class="blocadmin">	
	<fieldset>
	<legend><h2>ESPACE ADMINISTRATEURS</h2></legend>
	<form action="login.php">
		<input type="submit" name="Logout" value="Se déconnecter" >
	</form>
	</fieldset>
	
	<form name="Enregistrement d'utilisateur" method="post">
		<fieldset>
		<legend><h2>AJOUTER UTILISATEUR</h2></legend>

		<input type="text" name="username" placeholder= "Nom d'utilisateur" >

		<input type="email" name="email"  placeholder= "Email" >

		<input type="password" name="password" placeholder= "Mot de passe">

		<input type="password" name="password_confirmation" placeholder="Confirmation de mot de passe" minlength="3"><br>

		<select name="admin">

			<option> Utilisateur</option>
			<option value="1">Administrateur</option>

		</select> 

		<input type="submit" name="submit" value="Ajouter un utilisateur"> <br><br><br>
		</fieldset>
	</form>
	</div>
	<center>
	<table class="bd">
		<tr>
			<th>Nom d'utilisateur</td>
				<th>Email</td>
					<th>Admin</td>
						<th>Actions</td>
						</tr>
						<?php foreach($select->fetchAll(PDO::FETCH_ASSOC) as $user) {
							echo '<tr>';
							echo '<td>'.$user['username'].'</td>';
							echo '<td>'.$user['email'].'</td>';
							echo '<td>'.$user['admin'].'</td>';
							echo '<td>';
							echo '<form name="edit'.$user['id'].'" action= "edituser.php" method = "get">'
							.'<input type="hidden" name="id" value="'.$user['id'].'" />'
							. '<input type="submit" name="edit" value="Editer" >'
							. '</form>';
							echo '</td>';
							echo '<td>';
							echo '<form name="delete'.$user['id'].'" action="deleteuser.php" method="post">'
							. '<input type="hidden" name="id" value="'.$user['id'].'" />'
							. '<input type="submit" name = "suppr" value="Supprimer" />'
							. '</form>';
							echo '</td>';
							echo '</tr>';
						}
						?>
					</table>

				</form>
				<fieldset>
				<legend><h2>ESPACE PRODUITS</h2></legend>	
				<form action="product.php">

					<input type="submit"  value="Gestion produits"><br/>

				</form>
				</fieldset>

			</body>
			</html>