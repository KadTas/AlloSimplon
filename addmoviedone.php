<?php
include('connect.php');
?>

<?php

$nom = $_POST['nom'];
$synopsis = $_POST['synopsis'];
$sortie = $_POST['sortie'];
$trailer = $_POST['trailer'];
$duree = $_POST['duree'];
$note = $_POST['note'];

$reqadd = $bdd->prepare('INSERT INTO Film (nom, synopsis, sortie, trailer, duree, note) 
                        VALUES (:nom, :synopsis, :sortie, :trailer, :duree, :note)');
    $reqadd->execute(array(
        ':nom' => $nom,
        ':synopsis' => $synopsis,
        ':sortie' => $sortie,
        ':trailer' => $trailer,
        ':duree' => $duree,
        ':note' => $note
    ));
    header("location:addmovie.php");
?>
