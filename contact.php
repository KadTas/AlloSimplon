<?php
session_start();
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
?>
<?php if (!isset($_SESSION['id_type'])) { ?>
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


  <!-- zone de connexion -->

    <div id="container">
      

        <form action="verif.php" method="POST">
            <h2>Inscription</h2>

            <label><b>Nom d'utilisateur</b></label>
            <input class="login" type="text" placeholder="Nom d'utilisateur" name="pseudo" id="pseudo" required> <br>

            <label><b>Adresse mail</b></label>
            <input class="login" type="email" placeholder="adresse mail" name="adresse" id="adresse" required> <br>

            <label><b>Mot de passe</b></label>
            <input class="login"  type="password" placeholder="Mot de passe" name="motdepasse" id="motdepasse" required><br>

            <label><b>Nom</b></label>
            <input class="login"  type="text" placeholder="Nom" name="nom" id="nom" required><br>

            <label><b>Prénom</b></label>
            <input class="login"  type="text" placeholder="Prénom" name="prenom" id="prenom" required><br>

            <label><b>Date de naissance</b></label>
            <input class="login"  type="text" placeholder="YYYY-MM-DD" name="birthdate" id="birthdate" required><br>

            <input class="ok"type="submit" id='submit' value='REGISTER'> <br>


            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            ?> 


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