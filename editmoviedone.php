<?php
include('connect.php');
?>

<?php
$id = $_GET['id'];
$nom = $_POST['nom'];
$synopsis = $_POST['synopsis'];
$sortie = $_POST['sortie'];
$affiche = $_POST['affiche'];
$trailer = $_POST['trailer'];
$duree = $_POST['duree'];
$note = $_POST['note'];

$reqedituser = $bdd->prepare("UPDATE Film SET nom=?, synopsis=?, sortie=?, affiche=?, trailer=?, duree=?, note=? WHERE id='$id'");
    $reqedituser->execute([$nom, $synopsis, $sortie, $affiche, $trailer, $duree, $note]);
    header("location:users.php");
?>
