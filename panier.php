<?php
require("connexion.php");
session_start();
$reaa=$connexion->prepare("SELECT * from contient,bijoux,categorie where login=? and contient.idB=bijoux.idB and bijoux.idcat=categorie.idcat ");
$reaa->execute(array($_SESSION["login"]));
$total_prix = 0;


?>



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
    require("navbar2.php");


?>


    <div class="container text-center m-5">
        <i>VOTRE PANIER</i><hr>


    </div>
    <table   whidth="100%" border=1 rules="all" class="table table-hover">
    <tr><th>libelle</th>   <th>image</th> <th>description</th> <th>prix</th> <th>categorie</th><th>Action</th></tr>
      <?php  while($li=$reaa->fetch(PDO::FETCH_OBJ)) {  ?>
    <tr class="text-center">
    <td><?php echo $li->libelle;   ?></td>
    <td> <img src="<?php echo $li->image;   ?> " alt=""  width="70px" height="70px"></td>
    <td><?php echo $li->desciption;   ?></td>
    <td><?php echo $li->prix;   ?></td>
    <td><?php echo $li->lib;   ?></td>
    <td ><a href="supprimer.php?idb=<?php echo $li->idB;   ?>" class="text-dark"  onclick="return confirm('voulez vous vraiment supprimer se produit?')" >Supprimer</a></td>
   </tr><?php  $total_prix +=floatval($li->prix) ; } $quantite=$reaa->rowCount();?>
  
  

    </table>
    <br> <h4  class="text-center"><i>LE TOTAL DE  <?php echo $quantite ;?> est <?php echo $total_prix; ?>$  <br> </i></h4><br>
    <div 
                        style="border: solid 2px rgb(224, 190, 196) ;background-color:pink ;width: 40% ;text-align: center;margin-left: 380px;" >
                        <a href="validation.php"  style="color:black  ;text-decoration:none ;">
                            <p class="pt-2">Valider le commande</p>
                        </a></div><br>
    <?php
    require("footer.php")


?>



    
</body>
</html>