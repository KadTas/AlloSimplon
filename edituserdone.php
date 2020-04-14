<?php
include('connect.php');
?>

<?php
$id = $_GET['id'];
$pseudo = $_POST['pseudo'];
$motdepasse = $_POST['motdepasse'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$birthdate = $_POST['birthdate'];

$reqedituser = $bdd->prepare("UPDATE utilisateur SET pseudo=?, motdepasse=?, nom=?, prenom=?, adresse=?, birthdate=? WHERE id='$id'");
    $reqedituser->execute([$pseudo, $motdepasse, $nom, $prenom, $adresse, $birthdate]);
    header("location:users.php");
?>
