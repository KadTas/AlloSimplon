<?php
session_start();
include('connect.php');
?>

<?php

$nom = $_POST['nom'];
$synopsis = $_POST['synopsis'];
$sortie = $_POST['sortie'];
$trailer = $_POST['trailer'];
$duree = $_POST['duree'];
$affiche = $_POST['affiche'];
$note = $_POST['note'];

$reqadd = $bdd->prepare('INSERT INTO Film (nom, synopsis, sortie, trailer, duree, affiche, note) 
                        VALUES (:nom, :synopsis, :sortie, :trailer, :duree, :affiche, :note)');
    $reqadd->execute(array(
        ':nom' => $nom,
        ':synopsis' => $synopsis,
        ':sortie' => $sortie,
        ':trailer' => $trailer,
        ':duree' => $duree,
        ':affiche' => $affiche,
        ':note' => $note,
        
    ));
    header("location:addmovie.php");
?>
