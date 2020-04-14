<?php
include('connect.php');
?>

<?php

$film = $_POST['nom'];
$screenshot = $_POST['screenshot'];

$reqadd = $bdd->prepare('INSERT INTO Screenshots (nom, id_film) 
                        VALUES (:nom, :id_film)');
    $reqadd->execute(array(
        ':nom' => $screenshot,
        ':id_film' => $film,
    ));
    header("location:dashadmin.php");
?>
