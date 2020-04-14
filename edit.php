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
include 'include/nav.php'; 
$id = $_GET['id']?>
<?php $req = $bdd->prepare("SELECT * FROM utilisateur WHERE id='$id'");
    $req->execute();
    $resultat = $req->fetch()
    ?>

  <!-- zone de connexion -->

    <div id="container">
      

        <form action="edituserdone.php?id=<?php echo $_GET['id']?>" method="POST">
            <h2>Modifier l'utilisateur :</h2>

            <label><b>Pseudo :</b></label>
            <input class="login" type="text" value="<?php echo $resultat['pseudo'] ?>" name="pseudo" id="pseudo" required> <br>

            <label><b>Mot de passe :</b></label>
            <input class="login" type="text" value="<?php echo $resultat['motdepasse'] ?>" name="motdepasse" id="motdepasse" required> <br>

            <label><b>Nom :</b></label>
            <input class="login"  type="text" value="<?php echo $resultat['nom'] ?>" name="nom" id="nom" required><br>

            <label><b>Prénom :</b></label>
            <input class="login"  type="text" value="<?php echo $resultat['prenom'] ?>" name="prenom" id="prenom" required><br>

            <label><b>Mail :</b></label>
            <input class="login"  type="text" value="<?php echo $resultat['adresse'] ?>" name="adresse" id="adresse" required><br>

            <label><b>Date de naissance :</b></label>
            <input class="login"  type="date" value="<?php echo $resultat['birthdate'] ?>" name="birthdate" id="birthdate" required><br>

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