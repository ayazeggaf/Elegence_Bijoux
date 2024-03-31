



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
$re=$connexion->prepare("SELECT * from client");
$re->execute();



?>

   

    <table   whidth="100%" border=1 rules="all" class="table table-hover">
    <tr><th>login</th>   <th>prenom</th> <th>nom</th> <th>tel</th> <th>email</th><th>ville</th> <th>Action</th></tr>
      <?php  while($ligne=$re->fetch(PDO::FETCH_OBJ)) {  ?>
    <tr class="text-center">
    <td><?php echo $ligne->login;   ?></td>
   
    <td><?php echo $ligne->prenom;   ?></td>
    <td><?php echo $ligne->nom;   ?></td>
    <td><?php echo $ligne->tel;   ?></td>
    <td><?php echo $ligne->email;   ?></td>  <td><?php echo $ligne->ville;   ?></td>
    <td ><a href="supprimerClient.php?login=<?php echo $ligne->login;   ?>" class="text-dark"  onclick="return confirm('voulez vous vraiment supprimer se produit?')" >Supprimer</a></td>
   </tr><?php  } ?>
  
  

    </table>
    
    <?php
    require("footer.php")


?>



    
</body>
</html>