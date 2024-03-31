<?php

require("connexion.php");
session_start();

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];

    $check = $connexion->prepare("SELECT login FROM client WHERE login = ?");
    $check->execute(array($login));
    $rowCount = $check->rowCount();

    if ($rowCount > 0) {
    
        $re = $connexion->prepare("INSERT INTO contient (idB, login) VALUES (?, ?)");
        $re->execute(array($_GET['idb'], $login));

        header("Location: panier.php");
    } else {
      
        header("Location: signup.php");
    }
} else {
    header("Location: signup.php");
}

?>
