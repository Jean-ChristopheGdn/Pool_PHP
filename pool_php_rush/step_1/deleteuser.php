<?php
include_once("connect_db.php");
$connection = connect_db();

if (isset( $_POST['id']))
{
    $pdostat= $connection->prepare('DELETE FROM users WHERE id=:num limit 1');

    $pdostat->bindValue(':num', $_POST['id'], PDO::PARAM_INT);

    $delete= $pdostat->execute();


    if($delete)
    {

        echo "le compte a bien été supprimé";
        header("location: admin.php");

    }

    else
    {

        echo "Le compte n'a pas pu être supprimé.";
        header("location: admin.php");
    }

}

?>

<a href="index.php"></a>
