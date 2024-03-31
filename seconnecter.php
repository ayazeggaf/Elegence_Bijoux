
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap.min.css.map">
    <script src="./jquery-3.6.0.js"></script>
    <script src="./bootstrap.min.js"></script>
    <style>
        .logo-container {
  width: 200px;
  height: 200px;
  position: relative;
  perspective: 800px;
}

.logo {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 40px;
 left:700px ;
  transition: transform 1s ease;
}

.logo:hover {
  transform: rotateY(360deg);
}
h1{
    font-family:Helvetica;
    margin-bottom:100px;
}

    </style>
   
</head>

<body>
   
    <div style="background-color: rgb(250, 232, 235);" class="text-center">

        <div class="logo-container">
            <center><img  class ="logo"src="./BIJOUTRIE/elegence bijoux (1).png" alt=""></center>
        </div>
        <div> <a class="pl-4" href="contact.html"><img src="bijoux.png" alt="" style="width: 50px;;"></a></div>



        <nav class="navbar navbar-expand-md bg-muted navbar-muted ">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#id">
                <span class="navbar-toggler-icon"></span>
                
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="id">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="acceuil.php" class="nav-link  text-dark text-uppercase">Acceuil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle text-dark text-uppercase pl-4" id="navbardrop"
                            data-toggle="dropdown">Tout les produits</a>
                        <div class="dropdown-menu" style="background-color:beige ;">
                            <a href="./BIJOUTRIE/colliers.php" class="dropdown-item text-uppercase">colliers</a>
                            <a href="./BIJOUTRIE/braclet.php" class="dropdown-item text-uppercase">bracelets</a>
                            <a href="./BIJOUTRIE/bague.php" class="dropdown-item text-uppercase">bagues</a>
                            <a href="./BIJOUTRIE/boucles.php" class="dropdown-item text-uppercase">boucles d'oreilles</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link text-dark text-uppercase  pl-4">SE connecter</a>
                    </li>

                </ul>


            </div>

        </nav>
 


    </div><br><br><br>


        </p></div>

    <div class="container">
        <center><h1>Se Connecter</h1></center>
        <?php  if(isset($_SESSION['inserer'])) : ?>
                <p class="alert alert-success"><?php echo $_SESSION["inserer"]; unset($_SESSION["inserer"]); ?></p>
           <?php elseif(isset($_SESSION['erreur_inserer'])):?>
                <p class="alert alert-danger"><?php echo $_SESSION["erreur"]; unset($_SESSION["erreur"]); ?></p>
        <?php endif ?>

        <form action="clienttraitement.php"  method="POST"  role="form"  style="background-color: rgb(250, 232, 235);" class='m-3 p-5'>
            <div class="row justify-content-between">


                <div class="col-12 mb-2"> LOGIN <br><input type="text" name="login" id="login" placeholder=" ENTRER VOTRE LOGIN" class="form-control"></div></div>
                <div class="row justify-content-between">
        
                <div class="col-12 mt-5">MOT DE PASSE <br><input type="text" name="motdepasse" id="motdepasse" placeholder="ENTRER VOTR MOT DE PASSE" class="form-control text-Lowercase p-3 "></div></div>
                <div class="row justify-content-between"><div class="col-6 "><button type="submit" name="se connecter" id="se connecter"  class="form-control col-8 text-Lowercase mt-5" value="SE connecter" style="background-color:pink ;"><a href="client.php">se connecter</a></button>
                
            </div> 
            <div class="col-6 "><button type="submit" name="s'inscrire" id="s'inscrire"  class="form-control col-8 text-Lowercase mt-5" value="S'inscrire" style="background-color:white ;color:pink ;border:solid 4px pink;"><a href="s'inscrire.php">S'inscrire</a></button></div></div>



           


        </form>



    </div>
    <hr>
    
    <div class="container-fluid " style="background-color:rgb(236, 198, 204) ;">
        <div class="row justify-content-between ">

            <div class=" col-md-3 pt-4">
                <p class="display-4 col-md-3 justify-content-between"> Boutique
                </p>
                <p>
                    elecence bijoux c'est une collection de bijoux tendances et à petits prix. © Elegence Bijoux</p>
                <h6 class="">Réalisation & design : @Elegence Bijoux</h6>
                <div class="col-12  justify-content-between  m-4">
                    <img src="./BIJOUTRIE/carte-de-credit (1).png" alt="" style="width:45px ;">
                    <img src="./BIJOUTRIE/carte-de-credit.png" alt="" style="width:45px ;">
                    <img src="./BIJOUTRIE/visa.png" alt="" style="width:45px ;">
                    <img src="./BIJOUTRIE/carte-de-credit (1).png" alt="" style="width:45px ;">
                    <img src="./BIJOUTRIE/visa.png" alt="" style="width:45px ;">
                    <img src="./BIJOUTRIE/carte-de-credit.png" alt="" style="width:45px ;">


                </div>

            </div>
            <div class=" col-md-3">
                <p class="display-4 col-md-3 justify-content-between">Informations
                </p>
                <p>
                    Mentions légales
                    Conditions générales de vente
                    Politique de retour
                    Politique de confidentialité
                    Contactez-nous</p>
            </div>
            <div class=" col-md-3 ">
                <p class="display-4">Inscription
                </p>
                <p>
                    nscription à la newsletter
                    Inscrivez-vous à notre newsletter pour recevoir nos offres, promotions et nouveautés. Vous pourrez
                    vous désinscrire à tout moment.
                </p>
                <div class="row justify-content-between"><input class="form-control col-8  " type="email" name="email"
                        id="bijoux" placeholder="Votre email">
                    <input class="form-control col-3 mr-4 " type="submit" name="" id="" value="Ok"
                        style="background-color:rgb(204, 165, 172) ;">
                </div>
            </div>


            <div class="col-10  justify-content-between text-center m-4">
                <img src="./BIJOUTRIE/allemagne.png" alt="" style="width:45px ;">
                <img src="./BIJOUTRIE/united-kingdom.png" alt="" style="width:45px ;">
                <img src="./BIJOUTRIE/france.png" alt="" style="width:45px ;">
                <img src="./BIJOUTRIE/australia.png" alt="" style="width:45px ;">
                <img src="./BIJOUTRIE/maroc.png " alt="" style="width:45px ;">
                <img src="./BIJOUTRIE/spain.png" alt="" style="width:45px ;">


            </div>





        </div>

    </div>

</body>
</html>
