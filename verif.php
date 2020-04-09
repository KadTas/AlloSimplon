<?php 
    include 'connect.php'
?>
<?
    $stmt = $bdd->prepare('SELECT pseudo FROM utilisateur WHERE pseudo = :pseudo');
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo "Stop right there, you criminal scum !";
        exit;
    } else {

    $req= $bdd->prepare('INSERT INTO utilisateur (pseudo, adresse, motdepasse, id_type, nom, prenom, birthdate) VALUES (:pseudo, :adresse, :motdepasse, :id_type, :nom, :prenom, :birthdate)');
    $req->execute(array(
        ':pseudo' => $_POST['pseudo'],
        ':adresse' => $_POST['adresse'],
        ':motdepasse' => $_POST['motdepasse'],
        ':nom' => $_POST['nom'],
        ':prenom' => $_POST['prenom'],
        ':birthdate' => $_POST['birthdate'],
        'id_type' => 3
    ));
    header('location:index.php');
}
?>