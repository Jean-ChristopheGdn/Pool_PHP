<?php
include_once("connect_db.php");
$connection = connect_db();

if (isset( $_POST['id']))
{
    $pdostat= $connection->prepare('DELETE FROM products WHERE id=:num limit 1');

    $pdostat->bindValue(':num', $_POST['id'], PDO::PARAM_INT);

    $delete= $pdostat->execute();


    if($delete)
    {

        echo "Le produit a bien été supprimé";
        header("location: product.php");

    }

    else
    {

        echo "Le produit n'a pas pu être supprimé.";
        header("location: product.php");
    }

}

?>

<a href="index.php"></a>
