<?php
   include('connect.php');
   $delmovie = $_GET['id'];
   $req= $bdd->prepare("DELETE FROM Film WHERE id = $delmovie");
   $req->execute();
   header('location:delmovie.php');
?>