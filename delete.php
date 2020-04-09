<?php
   include('connect.php');
   $deluser = $_GET['id'];
   $req= $bdd->prepare("DELETE FROM utilisateur WHERE id = $deluser");
   $req->execute();
   header('location:users.php');
?>