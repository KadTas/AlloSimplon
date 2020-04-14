<?php
session_start();
include('connect.php');
?>

<?php

$id = $_GET['id'];
$user = $_SESSION['id'];

$reqadd = $bdd->prepare("DELETE FROM favoris WHERE id_utilisateur=$user AND id=$id");
    $reqadd->execute();
    header("location:index.php");
?>
