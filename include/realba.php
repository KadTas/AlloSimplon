 <!--REAL BA-->
<?php include ('connect.php'); ?>
 <div class="real-real">Réalisateur</div>

<div class="real-ba">

<?php $id = $_GET['id'];
    $req= $bdd->prepare("SELECT * FROM realise WHERE id_film=$id");
    $req->execute();
    while($donnees = $req->fetch()) { 

    $reqreal = $bdd->prepare("SELECT * FROM realisateur WHERE id =" . $donnees['id']);
    $reqreal->execute();
    while($real = $reqreal->fetch()) { ?>

    <div class="real">
        <div class="img-real">
            <img src="<?php echo $real['photo'] ?>" alt="">
            <div><?php echo $real['prenom'] . '&nbsp;' . $real['nom']   ?></div>
        </div>
        <div class="text-real">
            <?php echo $real['bio'] ?>
        </div>
    </div> <?php } }?>
    <div class="ba-yt">
    <?php $id = $_GET['id'];
    $req= $bdd->prepare("SELECT * FROM Film WHERE id=$id");
    $req->execute();
    while($donnees = $req->fetch()) { ?>
        <iframe width="400" height="250" src="<?php echo $donnees['trailer']?>" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
<?php } ?>
</div>
