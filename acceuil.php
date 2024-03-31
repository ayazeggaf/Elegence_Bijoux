




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
       
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
require("navbar.php");



?>

    <!-- <div style="background-color: beige;" class="text-center">

        <div>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"
                class="display-4 pt-4"> Aya's Bijoux </p>
        </div>
        <div> <a class="pl-4" href="contact.html"><img src="contact.png" alt="" style="width: 50px;;"></a></div>
      -->

         <?php  require("connexion.php") ;
        
         if(isset($_SESSION["login"])){
            $ra=$connexion->prepare("SELECT * FROM client WHERE login=?");
            $ra->execute(array($_SESSION["login"]));
            $ligne=$ra->fetch(PDO::FETCH_OBJ);

         }
         
         ?>
        <div class="container-fluid">
        <div class="row justify-content-center align-content-center"
            style="background-image:url(lll_1500x.webp);height: 500px;background-repeat: no-repeat;background-size: cover;">
            <div class="col-6">
                <h1 class="display-4 text-center"> Bienvenue </h1>
                <h6 class="text-center">ELEGENCE_BIJOUX est une marque de bijoux en acier inoxydable,
                    Ultra tendance et à des prix très accessibles.
                </h6>
            </div>
        </div>
    </div>
    <div class="text-center p-5" style="padding:50px ; margin-bottom:40px ;background-color: rgb(240, 205, 211); ">
        <p class="display-3">Bienvenue <b><?php 
                if (isset($_SESSION["login"])  && $ligne){  echo strtoupper($ligne->prenom)." ". strtoupper($ligne->nom) ; }
                ?></b></p>
        <p> ELEGENCE_BIJOUX est une marque de bijoux en acier inoxydable. Ultra tendance et à des prix très accessibles.
            Découvrez régulièrement des nouveautés sur notre site internet</p>
    </div>
    <div class="container-fluid border-bottom">
        <div style="margin:20px ;" class="text-center">
            <h3>Dernières nouveautés </h3>
        </div>
        <?php
            require("bijoux.php");
        ?>
         <div class="container-fluid mt-2">
        <div class="row">
            <div class="coco col-12 col-md-6 col-lg-3 mt-2"> <img src="téléchargement.jpg" alt="" style="width: 300px;filter: brightness(60%);">
            </div>
            <div class="col-12 col-md-6 col-lg-9 mt-2" style="background-color:rgb(240, 205, 211) ;   ; ;">
                <p class="display-4 p-1"> & Bijoux tendances en acier inoxydable :</p>
                <h3 class="p-5">Des bijoux tendances, des bijoux minutieusement sélectionnés pour vous, à des prix
                    très accessibles. Pour vous faire plaisir et faire plaisir et vos proches . Vous trouverez toute la
                    panoplie pour votre coffre à bijoux : Bracelets, colliers, boucles d'oreilles... À assortir à vos
                    tenues.</h3>
                <a href="" class="text-center text-dark text-uppercase p-5 ">>>> Tout la collection</a>
            </div>
        </div>

    </div><br>    <div class="container-fluid mt-5">
        <div class="row ">
            <div class="col-md-6 "
                style="background-image:url(fifi.jpg)  ;background-repeat: no-repeat;background-size: cover;height: 550px; ">
                <a href="cat.php" class="text-uppercase text-center p-5 text-white ">
                    <p>les bagues</p>
                    <p>decouvrir la collection</p>
                </a>
            </div>
            <div class="col-md-6 mt-2">
                <div class="row justify-content-around">
                    <div class="col-md-3"
                        style="background-image:url(aa.jpg)  ;background-repeat: no-repeat;background-size: cover;height: 250px; ">
                        <a href="cat.php" class="text-uppercase text-center p-5 text-white ">
                            <p>Colliers</p>
                            <p>New collection</p>
                        </a>
                    </div>
                    <div class="col-md-3"
                        style="background-image:url(téléchargement\ \(10\).jpg)  ;background-repeat: no-repeat;background-size: cover;height: 250px; ">
                        <a href="cat.php" class="text-uppercase text-center p-5 text-white ">
                            <p>Boucles D'oreille</p>
                            <p>La collection</p>
                        </a>
                    </div>

                </div>
                <div class="row justify-content-around">
                    <div class="col-md-3 mt-4"
                        style="background-image:url(pexels-sunsetoned-6431179_1000x.webp)  ;background-repeat: no-repeat;background-size: cover;height: 250px; ">
                        <a href="cat.php" class="text-uppercase text-center p-5 text-white ">
                            <p>Tout</p>
                            <p> la collection</p>
                        </a>
                    </div>
                    <div class="col-md-3 mt-4"
                        style="background-image:url(bb.jpg)  ;background-repeat: no-repeat;background-size: cover;height: 250px;; ">
                        <a href="cat.php" class="text-uppercase text-center p-5 text-white ">
                            <p>Bracelets</p>
                            <p> la collection</p>
                        </a>
                    </div>
                </div>
            </div>


        </div><br>  <div style="background-color: rgb(240, 205, 211);margin-bottom: 50px;">
        <div class="text-center m-4">
            <p class="display-4">Suivez-VOUS SUR INSTAGRAAM #Elegence bijoux</p>
        </div>
        <div class="container-fluid">
            <div class="row  justify-content-around p-2 pb-4 text-white">
                <div class="col-md-2  text-center"
                    style="background-image:url(1.webp) ; background-repeat: no-repeat; background-size: cover; height: 200px;line-height: 200px;">
                    #elgenceBIJOUX</div>
                <div class="col-md-2  text-center"
                    style="background-image:url(2.webp); background-repeat: no-repeat; background-size: cover; height: 200px;line-height: 200px;;">
                    #elgenceBIJOUX</div>
                <div class="col-md-2  text-center"
                    style="background-image: url(3.webp) ; background-repeat: no-repeat; background-size: cover; height: 200px;line-height: 200px;">
                    #elgenceBIJOUX</div>
                <div class="col-md-2  text-center"
                    style="background-image:url(4.webp) ;background-repeat: no-repeat; background-size: cover; height: 200px;line-height: 200px;">
                    #elgenceBIJOUX</div>

                <div class="col-md-12 justify-content-center text-dark p-1 text-center m-3"><button
                        style="background-color: rgb(235, 192, 199);"><a href="https://www.instagram.com"
                            class="text-dark">FOLOW US</a></button></div>
            </div>



        </div>
    </div><br>
          <?php
            require("footer.php");
        ?>
      
</body>
</html>