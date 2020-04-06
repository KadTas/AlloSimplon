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
    header("Location:catalogue.php");
}
else
{
    session_start();
    $_SESSION['pseudo'] = $resultat['pseudo'];
    $_SESSION['id_type'] = $resultat['id_type'];
    header("Location:index.php?login=ok");
}
?>