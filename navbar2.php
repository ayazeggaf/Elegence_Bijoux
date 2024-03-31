<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-3.6.0.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>
<div class="text-center m-4">
        <p>Livraison offerte à partir de 50euros d’achats vers la France métropolitaine, la Belgique, Luxembourg,
            Pays-bas et Allemagne.et gratuit dans le maroc.</p>
    </div>
    <div style="background-color: rgb(250, 232, 235);" class="text-center">

        <div>
            <h2 class=" pt-4" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> ELEGENCE_BIJOUX </h2>
        </div>
        <div> <a class="pl-4" href="contact.html"><img src="bijoux.png" alt="" style="width: 50px;;"></a></div>



        <nav class="navbar navbar-expand-md bg-muted navbar-muted ">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#id">
                <span class="navbar-toggler-icon"></span>
                Aya's Bijoux
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="id">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="acceuil.php" class="nav-link  text-dark text-uppercase">Acceuil</a>
                    </li>
                 
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle text-dark text-uppercase pl-4" id="navbardrop"
                            data-toggle="dropdown">Nos produits</a>
                        <div class="dropdown-menu" style="background-color:white ;">
                        <?php
                        require("connexion.php");
                        $re=$connexion->prepare("SELECT * FROM categorie");
                        $re->execute();
                        while($li=$re->fetch(PDO::FETCH_OBJ)){;
            

                        ?>
                            
                            <a href="cat.php?idcat=<?php  echo $li->idcat; ?>" class="dropdown-item text-uppercase"><?php  echo $li->lib; ?></a> <?php  } ?>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link text-dark text-uppercase  pl-4">Contact nous</a>
                    </li>
                    <?php   
                    if(isset($_SESSION["login"])){
                    
                    ?>
                  
                    <li class="nav-item">
                

                        <a href="deconnecter.php" onclick="return confirm('voulez vous vraiment deconnecter?')"   class="nav-link  text-dark text-uppercase"><img src="se-deconnecter.png" alt="" width="40px" height="30px" ></a>
                    </li>
                    </li>
                    <?php 
                    if(isset($_SESSION["login"]) && $_SESSION["login"]!="elegence"){
                    
                    ?>
                    <li class="nav-item">
                    <?php

$reaa=$connexion->prepare("SELECT * from contient,bijoux,categorie where login=? and contient.idB=bijoux.idB and  bijoux.idcat=categorie.idcat");
$reaa->execute(array($_SESSION["login"]));
$le=$reaa->rowCount();



?>
                

                <a href="panier.php"    class="nav-link  text-dark text-uppercase ml-5"><img src="ajouter-au-chariot.png" alt="" width="40px" height="30px" >(<?php echo $le;?> )</a>
            </li>     <?php } ?>
                    
                    
                    <?php } ?>

                </ul>
              



            </div>

        </nav>
        </div>
</body>
</html>