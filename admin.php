<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
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
<?php
$re=$connexion->prepare("SELECT * from client");
$re->execute();

?>
<div class="container-fluid">
    <div class="row justify-content-between text-dark m-5">
        <div class="card col-md-3 ml-3" style="">
            <div class="card-body text-dark">
                <img src="bijoux.png" alt=""  width="120px" height="120px">
                <a href="ajouterBijoux.php" class=" text-dark">Ajouter bijoux</a>
            </div>
        </div>

        <div class="card col-md-3 ml-3" >
            <div class="card-body">
                <img src="client.png" alt=""  width="100px" height="120px">
                <a href="voirclient.php" class="card-body text-dark">Votre client ( <?php echo $re->rowCount(); ?>)  <div class="container text-center m-5">
        


    </div></a>
            </div>
        </div>

        <div class="card col-md-3 ml-3" >
            <div class="card-body">
                <img src="bijoux (1).png" alt=""  width="80px" height="120px">
                <a href="espacebijoux.php" class="card-body text-dark">Modifier bijoux</a>
            </div>
        </div>
    </div>
</div>

<?php
require("footer.php");

?>
 
 
</body>
</html>