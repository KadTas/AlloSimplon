<?php include 'connect.php' ?>
<!--CATALOGUE FILMS-->
<?php $req= $bdd->prepare("SELECT * FROM Film, appartient, Genre WHERE appartient.id_Genre = Genre.id_genre AND Film.id = appartient.id_appartient");
$req->execute();
//boucle pour tout afficher
while($donnees = $req->fetch()) { ?> 
<div class="axeldroite">
            <a href="parasite.php?id=<?php echo $donnees['id']?>" class="versfilm">
            <div class="cardaxel">
                <img class="poster-img" src="./img/custom/<?php echo $donnees['affiche']?>" alt="">
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