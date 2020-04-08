<?php
header('Content-type: text/plain');

$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$mail = $_POST['email'];
$contenu = $_POST['message'];
$to_email = "tas@simplon-charleville.fr";
$headers = "From: $nom $prenom <$mail> \r\n";
           "Reply-To: $mail . \r\n"  ;
?>
