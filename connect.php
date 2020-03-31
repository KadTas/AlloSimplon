<?php
     // on se connecte à notre base
     $server = "db5000303655.hosting-data.io";
     $dbname = "dbs296642";
     $user = "dbu526627";
     $pass = ")uq6PE.9";
 
     try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass,$pdo_options);
     }
     catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }      
?>