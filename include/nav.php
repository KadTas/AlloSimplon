<!--TOGGLE MOBILE-->

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
        <div></div>
    </div>
    <div class="menu">
        <div>
            <div>
                <ul>
                    <Li><a href="catalogue.php">Films</a></Li>

                    <?php if ($_SESSION['id_type'] == 1) { ?>
                        <li><a href=dashadmin.php>Dashboard</a></li>
                        <li><a href=deconnexion.php>Déconnexion</a></li>
                    <?php } 
                    elseif ($_SESSION['id_type'] == 3) { ?>
                        <li><a href=profil.php>Profil</a></li>
                        <li><a href=deconnexion.php>Déconnexion</a></li>
                    <?php }
                    else { ?>
                    <Li><a href="connexion.php">Connexion</a></Li>
                    <Li><a href="inscription.php">Inscription</a></Li>
                    <?php } ?>
                        <div class="liens-couleurs">

                    <li>
                        <div class="style_axel"><a href="<?php echo $actuel; ?>?style=../css/index.css"></a>
                            <div>
                    </li>
                    <li>
                        <div class="style_pol"><a href="<?php echo $actuel; ?>?style=../pol/index2.css"></a></div>
                    </li>
                    <li>
                        <div class="style_steven"><a href="<?php echo $actuel; ?>?style=../steven/index3.css"></a></div>
                    </li>
                    <li>
                        <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=../axel/index4.css"></a></div>
                    </li>
                    </div>



                    <form action="">
                        <input type="text" placeholder="" name="search">
                        <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                    </form>

                </ul>
            </div>
        </div>
    </div>

</div>


<!--TITRE-->

<div class="title-dada">
    <h1> <a href="index.php"> ALLO SIMPLON</a></h1>
</div>


<!--NAV BAR-->

<div class="nav-dada">
    <div class="logo-dada">
        <h1><a class="lien-home" href="index.php">ALLO SIMPLON</a> </h1>
    </div>
    <div class="menu-nav">
        <form class="search-bar" action="">
            <input type="text" placeholder="" name="search">
            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="menu-dada">
            <ul>

                <li>
                    <div class="style_axel"><a href="<?php echo $actuel; ?>?style=axel/index4.css"></a>
                        <div>
                </li>
                <li>
                    <div class="style_pol"><a href="<?php echo $actuel; ?>?style=pol/index2.css"></a></div>
                </li>
                <li>
                    <div class="style_steven"><a href="<?php echo $actuel; ?>?style=steven/index3.css"></a></div>
                </li>
                <li>
                    <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=index.css"></a></div>
                </li>
                <li><a href="catalogue.php">Films</a></li>
                <?php if ($_SESSION['id_type'] === "1") { ?>
                        <li><a href=dashadmin.php>Dashboard</a></li>
                        <li><a href=deconnexion.php>Déconnexion</a></li>
                    <?php } 
                    elseif ($_SESSION['id_type'] === "3") { ?>
                        <li><a href=profil.php>Profil</a></li>
                         <li><a href=deconnexion.php>Déconnexion</a></li> 
                     <?php }
                    else { ?>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <?php } ?>
            </ul>
        </div>
    </div>
</div>

<div class="vide"></div>