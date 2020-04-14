<?php
session_start();
include('connect.php');
?>

<?php

$id = $_GET['id'];
$user = $_SESSION['id'];

$reqadd = $bdd->prepare('INSERT INTO favoris (id, id_utilisateur) 
                        VALUES (:id, :id_utilisateur)');
    $reqadd->execute(array(
        ':id' => $id,
        ':id_utilisateur' => $user,
    ));
    header("location:index.php");
?>
