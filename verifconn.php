<?php
session_start();
include 'connect.php';
 
$req = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo AND motdepasse = :motdepasse');
 
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'motdepasse' => $_POST['motdepasse']));
$resultat = $req->fetch();
 
if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
    header("location:index.php");
}
else
{
    session_start();
    $_SESSION['pseudo'] = $pseudo;
    header("Location:index.php");
}
?>