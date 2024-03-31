<?php
session_start();
require("connexion.php");
$reqClient = $connexion->prepare("SELECT * FROM client");
$reqClient->execute();

$login = $_POST['login'];
$mot = $_POST['mot'];
$_SESSION["login"] = $login;

if ($login == "elegence" && $mot == "0000") {
    header("location: admin.php");
} else {
    $validCredentials = false;
    while ($donne = $reqClient->fetch()) {
        if ($login == $donne['login'] && $mot == $donne['motdepasse']) {
            $_SESSION["login"] = $login;
            $validCredentials = true;
            break;
        }
    }

    if ($validCredentials) {
        header("location: acceuil.php");
    } else {
        $_SESSION['erreur'] = "Ce nom d'utilisateur ou ce mot de passe n'existe pas!";
        header("location: signup.php?msg=error");
    }
}
?>
