<?php

require('connexion.php');

$idB = $_GET['idb'];


$reContient = $connexion->prepare("DELETE FROM contient WHERE idB = ?");
$reContient->execute(array($idB));


$reBijoux = $connexion->prepare("DELETE FROM bijoux WHERE idB = ?");
$reBijoux->execute(array($idB));

header("Location: espacebijoux.php?biensupprimer");

?>
