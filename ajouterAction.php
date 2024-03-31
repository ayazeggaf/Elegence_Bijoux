<?php
require("connexion.php");




    $requete=$connexion->prepare("SELECT * FROM bijoux where idb=?");
    $requete->execute(array($_POST['idb']));
    if($requete->rowCount()==0){

$ext=$_FILES['photo']['type'];
$lisstExst=array("image/png","image/jpeg");
if(in_array($ext,$lisstExst)){
    $tempnom=$_FILES['photo']['tmp_name'];
    $fichiernom=$_FILES['photo']['name'];
    $location="images/".$fichiernom;


    move_uploaded_file($tempnom,$location);
    $re=$connexion->prepare("INSERT INTO bijoux values(?,?,?,?,?,?)");
    $re->execute(array($_POST['idb'],$_POST['libelle'],$location,$_POST['description'],$_POST['prix'],$_POST['categorie']));
    header("location:ajouterBijoux.php?msg=bien inserer");



}
else{
    header("location:ajouterBijoux.php?msg=erreur de chargement!");
}}
else{
    header("location:ajouterBijoux.php?msg=deja existe!");
}





?>