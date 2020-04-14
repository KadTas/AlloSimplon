<?php
include('connect.php');
?>

<?php

$film = $_POST['nom'];
$genre = $_POST['nomgenre'];

$reqadd = $bdd->prepare('INSERT INTO appartient (id_appartient, id_Genre) 
                        VALUES (:id_appartient, :id_Genre)');
    $reqadd->execute(array(
        ':id_appartient' => $film,
        ':id_Genre' => $genre,
    ));
    header("location:dashadmin.php");
?>
