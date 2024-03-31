<?php
try {
    //code...
    $connexion=new PDO("mysql:host=localhost;dbname=ELEGENCE_BIJOUX;port=3306","root","");
} catch (Exeption $th) {
    //throw $th;
    echo "error!!".$th->getMessage();
}




?>