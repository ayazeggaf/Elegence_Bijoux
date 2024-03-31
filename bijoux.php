





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bijoux</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        button a:hover {
           
           
            background-color: white;

        }
        img{
            transition-duration: 1s;
        }

        img:hover {
            transform: scale(0.8);
        }

        /* .coco img:hover{
            rotate: 10deg;
        } */
    </style>
</head>
<body>
    <?php
    require("connexion.php");
    $requete=$connexion->prepare("SELECT * FROM bijoux");
    $requete->execute();

    
    
    
    ?>
     <div class="container-fluid border-bottom">
      
        <div class="row mb-5 text-center">
        <?php  while($ligne=$requete->fetch(PDO::FETCH_OBJ)){?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                
            <a href="card.php?idb=<?php echo $ligne->idB;?>" class="text-dark text-decoration-none">
                    <img src="<?php echo $ligne->image;?>" alt="img" > </a>
                    <p class="text-muted">Aya's Bijoux</p>
                    <p></p>
                    <p><?php echo $ligne->desciption;?><?php echo $ligne->libelle;?></p>
                    <p><?php echo $ligne->prix;?></p>
               
            </div><?php } ?> </div> </div>
          
    

</body>
</html>