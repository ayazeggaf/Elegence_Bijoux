<?php

require('connexion.php');
$re=$connexion->prepare("DELETE FROM contient where idB=?");
$re->execute(array($_GET['idb']));
session_start();

header("location:panier.php?biensupprimer?");


?>