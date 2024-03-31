<?php
session_start();
require ("connexion.php");
if (isset($_POST["s'inscrir"])){
   $login= $_POST['login'];
   $nom = $_POST['nom'];
   $prenom= $_POST['prenom'];
   $tel= $_POST['tel'];
   $email = $_POST['email'];
   $ville= $_POST['ville'];
 
   $adresse= $_POST['adresse'];
     $mot= $_POST['mot'];
  
   
   
   $r=$connexion->prepare("SELECT * FROM client");
   $r->execute();
   
   $existe=false;
   while($ligne=$r->fetch()){
       if($_POST['login']==$ligne['login']){
           $existe=true;
           break;
       }
   }
   if($existe){
       $_SESSION['msg']="ce login deja existe!";
       header("location:contact.php");
   }
   elseif(empty($login )|| empty($nom ) || empty($prenom ) || empty($mot)  || empty( $tel )||  empty($ville) || empty($adresse) ){
    $_SESSION['msg']="les champ sont vide!";
    header("location:contact.php");

   }
   
   else{
       $req=$connexion->prepare("INSERT INTO client VALUES(?,?,?,?,?,?,?,?)");
       $req->execute(array($login,$prenom,$nom,$tel,$email,$ville,$adresse,$mot));
       
       $_SESSION["login"] = $login;
       $_SESSION["msg"] = "vous etes inscrit avec succes! ";
       header("location:contact.php");}}

?>