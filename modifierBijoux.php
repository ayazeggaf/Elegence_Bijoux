

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
    <script src="jquery-3.6.0.js"></script>
    <script src="bootstrap.min.js"></script>
</head>

<body>


<?php
   require("connexion.php");
   $requete=$connexion->prepare("SELECT * FROM categorie");
   $requete->execute();
   $re=$connexion->prepare("SELECT * from bijoux WHERE idB=?");
   $re->execute(array($_GET['idb']));
   $donnee=$re->fetch(PDO::FETCH_OBJ);
?>




    
  
    <div style="background-color: rgb(250, 232, 235);width:80%;margin:auto" class="text-center">

      


    <div style="width:80%;margin:auto" class="text-center"  >

<form action="modifierAction.php" method="post"  style="background-color: rgb(250, 232, 235);" class='m-3 p-5' enctype="multipart/form-data">
    
   


<div class="row justify-content-between">
        <div class="col-12 mb-2"> <i><h3 class="
        ">Modifier BIJOUX:
</h3></i></div>
        <div class="col-6 mb-2"><input type="text" name="id" id="" placeholder="idb"disabled value="<?php  echo $donnee->idB;   ?>" class="form-control"></div>
        <div class="col-6 mb-2"><input type="text" name="lib" value="<?php  echo $donnee->libelle;   ?>"placeholder="libelle" class="form-control"></div>
        <div class="col-6 mb-2"><input type="text" name="des" id=""value="<?php  echo $donnee->desciption;   ?>" placeholder="description" class="form-control"></div>
        

       

        <div class="col-6 mb-2"><input type="text" name="pr" id="p" value="<?php  echo $donnee->prix;   ?>" placeholder="prix" class="form-control text-Lowercase p-3 "></div>
     
      <div  class="col-5 mb-2"> <select name="cat" id="" class="  ">
       
            <?php while ($ligne=$requete->fetch(PDO::FETCH_OBJ)) { ?>
                <option value="<?php  echo $ligne->idcat; ?> " <?php if($ligne->idcat==$donnee->idcat) echo 'selected';?>><?php  echo $ligne->lib;    ?></option>
               
           <?php }?>
        </select>
       
    </div>
    <input type="hidden" name="p1" id=""  value="<?php echo $donnee->image;  ?>">
    <div class="col-6 mb-2"><input type="file" name="photo" id="" placeholder="image" ></div>
    <div class="col-12"><input type="submit" name="submit" id="e"  class="form-control col-12text-Lowercase m-2" value="Modifier" style="background-color:pink ;"></div>


</form>
 


    </div><br><br><br>
    



</body>
</html>