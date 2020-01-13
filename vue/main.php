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
                    <div class="titleContent">
                        <p>Projet F.A.P.A.T</p>
                    </div>
                    <div class="hiddenText">
                        <p>Fighting Aircraft Pilot Aptitude Test</p>
                    </div>
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
                <div class="buttonUnder">

                    <div class="corps">
                      <a href="index.php?action=documentation">Documentation</a>
                    </div>
                    <div class="corps">
                      <a>Statistiques</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
