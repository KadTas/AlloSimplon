<div id="catalogue">

<?php

include 'connect.php';

//$req = $bdd->prepare("SELECT id, nom FROM film");
//$req ->execute();
$query_cinema = $dbh->query('SELECT * FROM cinema');
while( $donnees = $query_cinema->fetch() ) {
        ?>
<a href="./film_title.php?id=<?=$donnees['id'] ?>" >
    <div class="cardaxel">
        <img class="poster-img" src="" alt="">
        <div class="titrefilm"><?= $donnees['nom'] ?></div>

    </div>
</a>

<?php 

}

?>

</div>
