
<?php
   require("connexion.php");
   $requete=$connexion->prepare("SELECT * FROM categorie");
   $requete->execute();


?>


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


    
  
    <div style="background-color: rgb(250, 232, 235);width:80%;margin:auto" class="text-center">

      


    <div style="width:80%;margin:auto" class="text-center"  >

<form action="ajouterAction.php" method="post"  style="background-color: rgb(250, 232, 235);" class='m-3 p-5' enctype="multipart/form-data">
    
   
<?php
  if (isset($_GET['msg'])){
    $message = $_GET['msg'];
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
    echo $message;
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';
  }
?>

<div class="row justify-content-between">
        <div class="col-12 mb-2"> <i><h3 class="
        ">Elegence BIJOUX:
</h3></i></div>
        <div class="col-6 mb-2"><input type="text" name="idb" id="" placeholder="idb" class="form-control"></div>
        <div class="col-6 mb-2"><input type="text" name="libelle" id="" placeholder="libelle" class="form-control"></div>
        <div class="col-6 mb-2"><input type="text" name="description" id="" placeholder="description" class="form-control"></div>
        

       

        <div class="col-6 mb-2"><input type="text" name="prix" id="p" placeholder="prix" class="form-control text-Lowercase p-3 "></div>
     
      <div  class="col-5 mb-2"> <select name="categorie" id="" class="  ">
       
            <?php while ($ligne=$requete->fetch(PDO::FETCH_OBJ)) { ?>
                <option value="<?php  echo $ligne->idcat;    ?> " ><?php  echo $ligne->lib;    ?></option>
               
           <?php }?>
        </select>
       
    </div>
    <div class="col-6 mb-2"><input type="file" name="photo" id="" placeholder="image" ></div>
    <div class="col-12"><input type="submit" name="submit" id="e"  class="form-control col-12text-Lowercase m-2" value="ajouter" style="background-color:pink ;"></div>


</form>
 


    </div><br><br><br>
    



</body>
</html>