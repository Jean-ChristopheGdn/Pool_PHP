<?php 
include_once("connect_db.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (!empty($_GET))
{
	var_dump($_GET);
$connection = connect_db();
$select = $connection->prepare("SELECT * FROM users WHERE id = :num");
$id = $_GET["id"];

$select->bindParam(':num', $id);
$exe = $select->execute() or die(print_r($connection->errorInfo(), true));
$user = $select->fetch (PDO::FETCH_ASSOC);
}
?> 

<!DOCTYPE html>
<html>

<head>
	<title>Edition</title>
</head>

<body>

	<h2>Edition d'utilisateurs</h2>

	<form action="admin.php">
		<input type="submit" name="return" value="Retour à la page Administrateur"><br><br>
	</form>

	<form href="edit.php" action="post">

		<input type="hidden" name="numContact" value="<?= $user['id'] ?>">
	
		<input type="text" name="name" value="<?php echo $user['username'] ?> "  placeholder="Nouveau nom"><br>

		<input type="email" name="email" value="<?php echo $user['email'] ?>" placeholder="Nouvel Email"><br>

		<input type="password" name="password" value="<?php echo $user['password'] ?>" placeholder="Nouveau mot de passe"><br>

		<select name="admin">
			<option value="0">Utilisateur</option>
			<option value="1">Administrateur</option>
		</select> 	

		<input type="submit" name="update_admin" value="Mettre à jour"> <br>

	</form>
</body>
</html>
