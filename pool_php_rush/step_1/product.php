<?php
include_once("connect_db.php");
include_once("deleteproduct.php");

if (!empty($_POST))
{
    $object = new PDO('mysql:host=localhost;dbname=pool_php_rush;port=3306','oner', 'oner');


     // Requête mysql pour insérer des données
    $pdostat = $object->prepare ("INSERT INTO products VALUES (NULL, :name, :price, :category_id)");


    //on lie les valeurs
    $pdostat->bindValue('name', $_POST['name']);
    $pdostat->bindValue('price', $_POST['price']);
    $pdostat->bindValue('category_id', $_POST['category_id']);

    $insertisok = $pdostat->execute();

    // vérifier si la requête d'insertion a réussi
    if($insertisok)
    {
       echo 'Produit ajouté.';
   }
   else
   {
    echo "Échec de l'opération d'insertion";
}
}

$connection = connect_db();
$sql = "SELECT * FROM products";
$select = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>GESTION PRODUITS</h1><br>

    <div class="bloc1">
        <form  method="post">
            <fieldset>
              <legend><h2>Ajouter un produit</h2></legend>
              <input type="text" name="name" placeholder = "Nom" >
              <input type="text" name="price" placeholder = "Prix">
              <input type="text" name="category_id" placeholder = "type">
              <br><input type="submit" name="add" value="Ajouter produit"><br/>
          </form>
      </fieldset>
  </div>
  <h1>LISTE DES PRODUITS</h1>
</form>
<form>
    <table>
        <tr>
            <th>Nom du produit</td>
                <th>Prix</td>
                    <th>Catégorie</td>
                        <th>Actions </tr>
                            <?php foreach($select->fetchAll(PDO::FETCH_ASSOC) as $donnees) {
                                echo '<tr>';
                                echo '<td>'.$donnees['name'].'</td>';
                                echo '<td>'.$donnees['price'].'</td>';
                                echo '<td>'.$donnees['category_id'].'</td>';
                                echo '<td>';
                                echo '<form name="edit'.$donnees['id'].'" action= "editdonnees.php" method = "get">'
                                .'<input type="hidden" name="id" value="'.$donnees['id'].'" />'
                                . '<input type="submit" name="edit" value="Editer" >'
                                . '</form>';
                                echo '</td>';
                                echo '<td>';
                                echo '<form name="delete'.$donnees['id'].'" action="deleteproduct.php" method="post">'
                                . '<input type="hidden" name="id" value="'.$donnees['id'].'" />'
                                . '<input type="submit" name = "suppr" value="Supprimer" />'
                                . '</form>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </table>

                    </form> 
        <form action="admin.php">

        <input type="submit"  value="Espace administrateurs."><br/>

    </form> 

                </body>
                </html>



