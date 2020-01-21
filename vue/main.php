<!DOCTYPE html>
<html>
<head>
    <title>
        Test FAPAT (Fr)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="public/css/styleMain.css">
    <meta name="viewport" content="width= device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
</head>
<body>
<?php
include ('enTete.php');
?>
<div class ="background" style="background-image:url('public/images/fighterPilot.jpg');">
    <div class="bodyContent">
        <div class = "textContent">
            <p>Fighting Aircraft Pilot</p>
            <p> Aptitude Test</p>
        </div>
        <?php
        if (isset($_SESSION['logged'])==true){
            if(isset($_SESSION['gestion'])){
                echo"<div class=\"corps\">
                    <a href=\"index.php?action=mainAdmin\">Gestion</a>
                </div>";
            }
            else{echo"<div class=\"corps\">
                    <a href=\"index.php?action=profil\">Profil</a>
                </div>";}
        }
        else{
            echo"<div class=\"corps\">
                    <a href=\"index.php?action=connect\">Se connecter</a>
                </div>";
        }
        ?>
        <div class="corps">
<<<<<<< HEAD
            <a href="index.php?action=documentation">Documentation</a>
            <a>Statistiques</a>
=======
            <a href ="index.php?action=documentation">Documentation</a>
            <?php
            if (isset($_SESSION['logged'])==true){
                echo"<a href=\"index.php?action=statistique\">Statistiques</a>";
            }
            else{
                echo"<a href=\"index.php?action=faq\">Questions Fréquentes</a>";
            }
            ?>
>>>>>>> ce60f75c15cfeb791ab25177b30d465d2b750f05
        </div>
    </div>
</div>
<?php
include ('piedPage.php');
?>
</body>
</html>
