<?php
include('connect.php');
?>

<?php

$film = $_POST['nom'];
$real = $_POST['nomreal'];

$reqadd = $bdd->prepare('INSERT INTO realise (id, id_Film) 
                        VALUES (:id, :id_Film)');
    $reqadd->execute(array(
        ':id' => $real,
        ':id_Film' => $film,
    ));
    header("location:dashadmin.php");
?>
