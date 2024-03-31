<?php

    require("connexion.php");
    $location=$_POST['p1'];
    if(!empty($_FILES['photo']['name'])){
        $tempName=$_FILES['photo']['tmp_name'];
        $nvname=$_FILES['photo']['name'];
        $location="images/".$nvname;
        move_uploaded_file($tempName,$location);
    
    }

    $re=$connexion->prepare("UPDATE bijoux SET libelle=?,image=?,desciption=?,prix =?,idcat=?
                            where idB=?");
    $re->execute(array($_POST['lib'],$location,$_POST['des'],$_POST['pr'],$_POST['cat'],$_POST['id']));


    header("location:espacebijoux.php");

?>