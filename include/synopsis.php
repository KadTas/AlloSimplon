<h2 class="page-film"><?php echo $donnees['nom'] ?></h2>
<div style="text-align:center"><a href="addfav.php?id=<?php echo $_GET['id']?>">Ajouter aux favoris</a></div>

    <!--SYNOPSIS-->
<?php    $id = $_GET['id'];
    $reqscreenshot= $bdd->prepare("SELECT * FROM Screenshots WHERE id_film=$id");
    $reqscreenshot->execute();
    while($screenshot = $reqscreenshot->fetch()) { ?>
    <div class="img-resume">
        <img class="img-film" src="<?php echo $screenshot['nom'] ?>" alt="">
    <?php } ?>
        <div class="synop">
                <p class="synop-title">Synopsis</p>
                <?php echo $donnees['synopsis'] ?>
        </div>
    </div>
