<?php
session_start();
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
include('connect.php');
?>
<?php if ($_SESSION['id_type'] === "1") { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLO SIMPLON</title>

    <!--SLICK-->

    <link rel="stylesheet" type="text/css" href="slick\slick\slick.css" />
    <link rel="stylesheet" type="text/css" href="slick\slick\slick-theme.css" />




    <!--CSS-->

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />


    <!--GOOGLE FONTS-->

    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Bellota+Text:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700,800,900|Quicksand:300,400,500,600,700&display=swap"
        rel="stylesheet">







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--FOTORAMA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


</head>

<body>
    <?php
    include 'include/nav.php';
    ?>
    <div id=container><table class="table">
    <table class="table">
    <tr>
    <td class="column1">Pseudo</td>
    <td class="column2">Mail</td>
    <td class="column3">Mot de passe</td>
    <td class="column3">Nom</td>
    <td class="column3">Prénom</td>
    <td class="column4">Modifier</td>
    <td class="column5">Supprimer</td>
    </tr>
    <?php 
    $req = $bdd->prepare('SELECT * FROM utilisateur');
    $req->execute();
    while ($resultat = $req->fetch()) {
    ?>
    <tr>
    <td class="column1"><?php echo $resultat['pseudo'] ?></td>
    <td class="column2"><?php echo $resultat['adresse'] ?></td>
    <td class="column3"><?php echo $resultat['motdepasse'] ?></td>
    <td class="column4"><?php echo $resultat['nom'] ?></td>
    <td class="column5"><?php echo $resultat['prenom'] ?></td>
    <td class="column6"><a href="edit.php?id=<?php echo $resultat['id']?>">Modifier</a></td>
    <td class="column7"><a href="delete.php?id=<?php echo $resultat['id']?>">Supprimer</a></td>
    </tr> <?php } ?>
    </table>
    </div>
    <?php
    include 'include/footer.php';
    ?>


    <script type="text/javascript" src="slick\slick\slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.center').slick({
                dots: true,
                autoplay: true,
                arrows: true,
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
    <?php }
    else {
        header('location:index.php');
    }
    ?>