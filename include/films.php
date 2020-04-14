<?php 
session_start();
include 'connect.php' 
?>
<!--CATALOGUE FILMS-->
<div class="axeldroite">
<?php $req= $bdd->prepare("SELECT * FROM Film, appartient, Genre WHERE appartient.id_Genre = Genre.id_genre AND Film.id = appartient.id_appartient");
$req->execute();
//boucle pour tout afficher
while($donnees = $req->fetch()) { ?>
            <a href="parasite.php?id=<?php echo $donnees['id']?>" class="versfilm"> 
            <div class="cardaxel">
                <img class="poster-img" src="<?php echo $donnees['affiche']?>" alt="">
                <div class="titrefilm"><?php echo $donnees['nom'] ?></div>
                <div class="infoaxel">
                    <div class="textaxel">
                       <p><?php echo $donnees['note']?>/5</p> 
                       <p><?php echo $donnees['duree']?></p> 
                       <p><?php echo $donnees['nom_genre']?></p>    
                    </div>
                </div>
            </div>
            </a>
<?php } ?>
        </div>

    </div>