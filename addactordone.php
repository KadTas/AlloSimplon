<?php
include('connect.php');
?>

<?php

$film = $_POST['nom'];
$acteur = $_POST['nomacteur'];

$reqadd = $bdd->prepare('INSERT INTO joue (id, id_acteur) 
                        VALUES (:id, :id_acteur)');
    $reqadd->execute(array(
        ':id' => $film,
        ':id_acteur' => $acteur,
    ));
    header("location:dashadmin.php");
?>
