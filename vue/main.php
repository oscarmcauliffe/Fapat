<!DOCTYPE html>
<html>
    <head>
        <title>
        Test FAPAT (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="public/css/styleMain.css">
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
                    <a href="documentation.php">Documentation</a>
                    <a>Statistiques</a>
                </div>
            </div>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
