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
          
        }
       .ajou:hover{
        background-color: rgb(250, 232, 235);


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
      

    </div>

    <div style=" margin-top: 30px;">
        <div>

        </div>
        <?php
        require("connexion.php");
        $requete=$connexion->prepare("SELECT * FROM bijoux where idB=? ");
        $requete->execute(array($_GET['idb']));
        $ligne=$requete->fetch(PDO::FETCH_OBJ);
        ?>

        
        <div class="container-fluid ">
        
            <div class="row justify-content-around   pt-4  pb-4" style="border-bottom:solid 2px rgb(225, 235, 183) ;">
                <div class="col-md-3">
                
                   
                    <p class="display-4"><?php echo $ligne->desciption;?></p>
                    <h5 class="display-5"> ELEGENCE_BIJOUX</h5>
                    <h4 class="display-5"> <?php echo  $ligne->libelle;?></h4>
                    <p class="display-5"> 
                    <?php $ligne->prix;?>
                    </p> 
                    <div 
                        style="border: solid 2px rgb(224, 190, 196) ;color:rgb(238, 199, 205) ;width: 70% ;text-align: center;margin-left: 30px;" class="ajou">
                        <a href="test.php?idb=<?php echo  $ligne->idB;?>"  style="color:rgb(238, 199, 205)  ;text-decoration:none ;">
                            <p class="pt-2">AJOUTER OU PANIER</p>
                        </a></div>
                </div>
                <div class="col-md-3 ff"><img src="<?php echo $ligne->image;?>" alt="" style="width:300px ; ;"></div>
                
               <div class="col-md-3 mt-5">
                <a href="prodouit.html" style="border-radius:solid 2px pink ;" class="text-decoration-none text-dark"><p class="display-4 text-decoration-none">AVIS CLIENTS</p> 
                <h6>pas d'avis actuellment</h4> 
               
               </div>

        </div>


    </div>






    </div>

    </div>
   


    <hr>
    <hr>
    <?php
require("footer.php");



?>
    
</body>

</html>