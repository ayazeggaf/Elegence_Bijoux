
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nouveautés</title>
    
    <style>
        button a:hover {
            border-radius: 10px;
            border: 2px solid black;
            background-color: bisque;

        }

        img:hover {
            transform: scale(1.3);
        }

        .ff img:hover {
            transform: scale(-1.3);
            filter: brightness(50%);
        }

        /* .coco img:hover{
            rotate: 10deg;
        } */
    </style>

</head>

<body>
<?php
require("navbar.php");

?>
  
        <div class="container-fluid">
            <div class="row justify-content-center align-content-center mb-5" id="background-image"
                style="background-image:url(aya.jpg);height: 600px;background-repeat: no-repeat;background-size: cover;">
                <div class="col-6">
                    <h1 class="display-4 text-center text-white">
                        <?php
                    require("connexion.php");
    
    if (isset($_GET['idcat'])) {
        $idcat = $_GET['idcat'];
    
        $requete = $connexion->prepare("SELECT * FROM  categorie WHERE categorie.idcat = ?");
        $requete->execute(array($idcat));
        $lo=$requete->fetch(PDO::FETCH_OBJ);
        echo $lo->lib;
    
    }
        
        ?>
                        
                    </h1>

                </div>
            </div>
        </div>


    </div>


        <div class="container-fluid border-bottom">
        <?php

    require("connexion.php");
    
if (isset($_GET['idcat'])) {
    $idcat = $_GET['idcat'];

    $requete = $connexion->prepare("SELECT * FROM bijoux, categorie WHERE bijoux.idcat = categorie.idcat AND categorie.idcat = ?");
    $requete->execute(array($idcat));


    
    
    
    ?>
      
      <div class="row mb-5 text-center">
        

      <?php  while($ligne=$requete->fetch(PDO::FETCH_OBJ)){?>
          <div class="col-sm-6 col-md-4 col-lg-3">
              
          <a href="card.php?idb=<?php echo $ligne->idB;?>" class="text-dark text-decoration-none">
                  <img src="<?php echo $ligne->image;?>" alt="img" > </a>
                  <p class="text-muted">Aya's Bijoux</p>
                  <p></p>
                  <p><?php echo $ligne->desciption;?><?php echo $ligne->libelle;?></p>
                  <p><?php echo $ligne->prix;?></p>
             
          </div><?php }} ?> </div> </div>
    
    <hr>
    <hr>
    <?php require("footer.php");?>
  
</body>

</html>