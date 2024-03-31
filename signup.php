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
   
    
    <div class="text-center m-4">
        <p>Livraison offerte à partir de 50euros d’achats vers la France métropolitaine, la Belgique, Luxembourg,
            Pays-bas et Allemagne.et gratuit dans le maroc.</p>
    </div>
    <div style="background-color: rgb(250, 232, 235);" class="text-center">

        <div>
            <h2 class=" pt-4" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Aya's Bijoux </h2>
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
                            data-toggle="dropdown">Tout les produits</a>
                        <div class="dropdown-menu" style="background-color:beige ;">
                            <a href="colliers.php" class="dropdown-item text-uppercase">colliers</a>
                            <a href="braclet.php" class="dropdown-item text-uppercase">bracelets</a>
                            <a href="bague.php" class="dropdown-item text-uppercase">bagues</a>
                            <a href="boucles.php" class="dropdown-item text-uppercase">boucles d'oreilles</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link text-dark text-uppercase  pl-4">Contact nous</a>
                    </li>

                </ul>


            </div>

        </nav>
 


    </div><br><br><br>
        <div><p class="text-center">Vous souhaitez un renseignement sur une commande ? Ou pour toute autre demande ? Contactez notre équipe.

        </p></div>

    <div class="container">
    <?php
        session_start();
        if(isset($_SESSION['erreur'])){
            echo '<div class="alert alert-danger">' . $_SESSION['erreur'] . '</div>';
            unset($_SESSION['erreur']); // Supprime la variable de session après l'avoir affichée
        }
        ?>


        <form action="signupACTION.php" method="post"  style="background-color: rgb(250, 232, 235);" class='m-3 p-5'>
            <div class="row justify-content-between">
                <div class="col-12 mb-2"> <p>Mail : contact@AYAZEGGAF68
                </p></div>
                <div class="col-6 mb-2"><input type="text" name="login" id="p" placeholder="login" class="form-control"></div>
        
                <div class="col-6 "><input type="text" name="mot" id="p" placeholder="entrer votre password" class="form-control text-Lowercase p-3 "></div>
                <div class="col-6 "><a  class="text-dark text-left text-Lowercase p-3 " href="contact.php">j'ai pas un compte?</a></div>
                <div class="col-6 "><input type="submit" name="submit" id="e"  class="form-control col-8 text-Lowercase m-2" value="envoyer" style="background-color:pink ;"></div>



            </div>


        </form>



    </div>
    <hr>
    <hr>
    <div class="container-fluid " style="background-color:rgb(236, 198, 204) ;">
        <div class="row justify-content-between ">

            <div class=" col-md-3 pt-4">
                <p class="display-4 col-md-3 justify-content-between"> Boutique
                </p>
                <p>
                    elecence bijoux c'est une collection de bijoux tendances et à petits prix. © Aya'sBijoux</p>
                <h6 class="">Réalisation & design : @AYAZEGGAF68</h6>
                <div class="col-12  justify-content-between  m-4">
                    <img src="carte-de-credit (1).png" alt="" style="width:45px ;">
                    <img src="carte-de-credit.png" alt="" style="width:45px ;">
                    <img src="visa.png" alt="" style="width:45px ;">
                    <img src="carte-de-credit (1).png" alt="" style="width:45px ;">
                    <img src="visa.png" alt="" style="width:45px ;">
                    <img src="carte-de-credit.png" alt="" style="width:45px ;">


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
                <img src="maroc.png" alt="" style="width:45px ;">
                <img src="united-kingdom.png" alt="" style="width:45px ;">
                <img src="france.png" alt="" style="width:45px ;">
                <img src="australia.png" alt="" style="width:45px ;">
                <img src="allemagne.png" alt="" style="width:45px ;">
                <img src="spain.png" alt="" style="width:45px ;">


            </div>





        </div>

    </div>

</body>
</html>