<!--Liste acteurs-->


<div class="acteurs-titre">Acteurs</div>

<section class="liste-acteurs">
<?php $id = $_GET['id'];
    $reqact= $bdd->prepare("SELECT * FROM Film, acteur, joue WHERE Film.id=$id AND joue.id = Film.id AND joue.id_acteur = acteur.id");
    $reqact->execute();
    while($donneesact = $reqact->fetch()) { ?>
    <div class="acteur">
        <img class="img-acteur" src="./img/custom/<?php echo $donneesact['photo_acteur'] ?>" alt="">
        <div><?php echo $donneesact['prenom_acteur'] . '&nbsp;' . $donneesact['nom_acteur']?></div>
    </div>
    <?php } ?>
</section>
