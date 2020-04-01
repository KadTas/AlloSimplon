 <!--AFFICHE-->
<?php include ('connect.php'); ?>
 <div class="title-dada-affiche">
    <h2>A l'affiche</h2>
</div>

<div class="center slider">

<?php
$req= $bdd->prepare("SELECT * FROM Film");
$req->execute();
//boucle pour tout afficher
while($donnees = $req->fetch()) { ?> 

    <a class="link-poster" href="paraite.php?id=<?php echo $donnees['id'] ?>"><img src="img/custom/<?php echo $donnees['affiche']; ?>" alt=""></a> 

<?php } ?>
 </div>



