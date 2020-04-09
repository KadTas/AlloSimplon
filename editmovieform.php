<?php
session_start();
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
include('connect.php')
?>
<?php if ($_SESSION['id_type'] === "1") { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

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




</head>

<body>

<?php 
include 'include/nav.php'; ?>
<?php $req = $bdd->prepare('SELECT * FROM Film');
    $req->execute();
    $resultat = $req->fetch()
    ?>

  <!-- zone de connexion -->

    <div id="container">
      

        <form action="editmoviedone.php" method="POST">
            <h2>Modifier le film :</h2>

            <label><b>Nom du film :</b></label>
            <input class="login" type="text" value="<?php echo $resultat['nom'] ?>" name="nom" id="nom" required> <br>

            <label><b>Synopsis :</b></label>
            <input class="login" type="text" value="<?php echo $resultat['synopsis'] ?>" name="synopsis" id="synopsis" required> <br>

            <label><b>Sortie :</b></label>
            <input class="login"  type="date" value="<?php echo $resultat['sortie'] ?>" name="sortie" id="sortie" required><br>

            <label><b>Affiche :</b></label>
            <input class="login"  type="text" value="<?php echo $resultat['affiche'] ?>" name="affiche" id="affiche" required><br>

            <label><b>Trailer :</b></label>
            <input class="login"  type="text" value="<?php echo $resultat['trailer'] ?>" name="trailer" id="trailer" required><br>

            <label><b>Durée :</b></label>
            <input class="login"  type="time" value="<?php echo $resultat['duree'] ?>" name="duree" id="duree" required><br>

            <input class="ok"type="submit" id='submit' value='Modifier'> <br>

        </form>
    </div>


<?php 
include 'include/footer.php'; ?>

</body>
</html>
<?php } 
        else {
            header('location:index.php');
        }
        ?>