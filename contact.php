<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
   
</head>

<body>
   
    
   
    <?php
            require("navbar.php");
        ?>
      
        <div class="container-fluid">
            <div class="row justify-content-center align-content-center mb-5"
                style="background-image:url(l3rosa.jpg);height: 700px;background-repeat: no-repeat;background-size: cover;">
                <div class="col-6">
                    <h1 class="display-4 text-center text-dark">Nous contacter


                    </h1>

                </div>
            </div>
        </div>


    </div>
        <div><p class="text-center">Vous souhaitez un renseignement sur une commande ? Ou pour toute autre demande ? Contactez notre équipe.

        </p></div>

    <div class="container">
    <div>
    
    <?php
         
      if (isset($_SESSION['msg'])){
        $message = $_SESSION['msg'];
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
        echo $message;
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';
      }
    ?>
    </div>

        <form action="contactAction.php" method='post'>
            <div class="row justify-content-between">
          

             
                <div class="col-12 mb-2"> <p>Mail : contact@AYAZEGGAF68
                </p></div>
                <div class="col-6 mb-2"><input type="text" name="login" id="p" placeholder="login" class="form-control"></div>
                <div class="col-6 mb-2"><input type="text" name="nom" id="p" placeholder="nom" class="form-control"></div>
                <div class="col-6 mb-2"><input type="text" name="prenom" id="p" placeholder="prenom" class="form-control"></div>
                <div class="col-6 mb-2"><input type="text" name="tel" id="p" placeholder="tel" class="form-control"></div>
                <div class="col-6 "><input type="text" name="email" id="p" placeholder="entrer votre email" class="form-control text-Lowercase p-3 "></div>
                <div class="col-6 mb-2"><input type="text" name="ville" id="p" placeholder="ville" class="form-control"></div>
                <div class="col-6 "><input type="text" name="adresse" id="p" placeholder="entrer votre adresse" class="form-control text-Lowercase p-3 "></div>
                <div class="col-6 "><input type="text" name="mot" id="p" placeholder="entrer votre password" class="form-control text-Lowercase p-3 "></div>
                <div class="col-4 "><a  class="text-dark text-left text-Lowercase p-3 " href="signup.php">vous avez deja un compte?</a></div>
                <div class="col-8 "><input type="submit" name="s'inscrir" id="e"  class="form-control col-8 text-Lowercase m-2" value="envoyer" style="background-color:pink ;"></div>



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