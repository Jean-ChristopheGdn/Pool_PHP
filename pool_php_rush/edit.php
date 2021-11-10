<?php 

include_once("connect_db.php");
session_start();
		
 		$connection = connect_db();
 		$pdostat = $connection->prepare("UPDATE users SET username=:username, email=:email, password=:password, created_at=:created_at, admin=:admin where id = :num LIMIT 1");

    	$pdostat->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
    	$pdostat->bindValue(':username', $_POST['username'], PDO::PARAM_INT);
    	$pdostat->bindValue(':email', $_POST['email'], PDO::PARAM_INT);
    	$pdostat->bindValue(':password', $_POST['password'], PDO::PARAM_INT);
    	$pdostat->bindValue(':created_at', $_POST['created_at'], PDO::PARAM_INT);
    	$pdostat->bindValue(':admin', $_POST['admin'], PDO::PARAM_INT);

    	$exe = $pdostat->execute();
    	$id = $_POST["id"];
    	$name = $_POST['username'];
    	$email = $_POST['email'];
    	$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    	$date = $result_query['created_at'];

		if ($exe)
		{
			$message = "L'utilisateur a été modifié avec succès !";
		}
		else
		{
			$message = "Echec de la mise a jour de l'utilisateur.";
		}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h1>Modification</h1>

 <p><?= $message ?></p>

 </body>
 </html>