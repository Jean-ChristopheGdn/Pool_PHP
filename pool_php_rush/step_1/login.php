<?php

include_once("connect_db.php");

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("ERROR_LOG_FILE", "./erreur.txt");

$connection = connect_db();


if(!empty($_POST)) 
{ 

    if(empty($_POST["email"]) || empty($_POST["password"])) 
    {
        echo "Veuillez entrer un mot de passe.";
    } 
    else
    {
        $sql = $connection->prepare("SELECT * FROM users WHERE email = '{$_POST["email"]}'");
        $sql->execute() or die(print_r($connection->errorInfo(), true));
        $verif = $sql->fetch (PDO::FETCH_ASSOC);
        
        if($verif != NULL)
        {
            echo 'Veuillez entrer un mot de passe correct.';


            if(password_verify($_POST["password"], $verif['password']))
            {
                $_SESSION["email"] = $_POST["email"];
                unset($sql);
                unset($connection);

                if($verif['admin'] != 0)
                {
                 header("location: admin.php");
             }
             else
             {
                header("location: index.php");
            }
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
    <title>Log toi donc!!</title>
</head>

<body>

    <div class="bloc">
    <form method="post">
        <fieldset>
       <legend> <h1>Connecte toi au paradis</h1></legend>
        <input type="text" name="email" placeholder= "Email" ><br><br/>
        <input type="password" name ="password" placeholder ="Mot de passe" minlength="3"><br><br/>
        <input type="submit" value="Conexion"><br/><br/>
        <a href="inscription.php"> <input type="button" value=" Inscris toi si ce n'est deja fait!!"> </a>		
    </form>
    </div>

</body>
</html>
