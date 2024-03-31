



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">


</head>
<body >
    <?php
    require("navbar.php");
   


?>
<?php
require("connexion.php");
$reaa=$connexion->prepare("SELECT * from bijoux,categorie where bijoux.idcat=categorie.idcat");
$reaa->execute();



?>

    <div class="container text-center m-5">
        <i>VOTRE Bijoux</i><hr>


    </div>
    <table   whidth="100%" border=1 rules="all" class="table table-hover">
    <tr><th>idB</th> <th>libelle</th>  <th>image</th> <th>description</th> <th>prix</th> <th>categorie</th><th>Action</th></tr>
      <?php  while($li=$reaa->fetch(PDO::FETCH_OBJ)) {  ?>
    <tr class="text-center">
    <td><?php echo $li->idB;   ?></td>
    <td><?php echo $li->libelle;   ?></td>
    <td> <img src="<?php echo $li->image;   ?> " alt=""  width="70px" height="70px"></td>
    <td><?php echo $li->desciption;   ?></td>
    <td><?php echo $li->prix;   ?></td>
    <td><?php echo $li->lib;   ?></td>
    <td ><a href="supprimerBijoux.php?idb=<?php echo $li->idB;   ?>" class="text-dark btn btn-warning"  onclick="return confirm('voulez vous vraiment supprimer se produit?')" >Supprimer</a>
    <a href="modifierBijoux.php?idb=<?php echo $li->idB;   ?>" class="text-dark ml-2 btn btn-warning"  >Modifier</a></td>
   </tr><?php  }?>
  
  

    </table>
    <br>

    <?php
    require("footer.php")


?>



    
</body>
</html>