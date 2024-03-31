<?php

require('connexion.php');
$re=$connexion->prepare("DELETE FROM client where login=?");
$re->execute(array($_GET['login']));
session_start();

header("location:voirclient.php?biensupprimer?");


?>