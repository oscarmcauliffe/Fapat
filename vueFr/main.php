<!DOCTYPE html>
<html>
<head>
    <title>
        Test FAPAT (Fr)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="public/css/styleMain.css">
    <meta name="viewport" content="width= device-width, initial-scale=1, maximum-scale=1, user-scalable=1"/>
</head>
<body>
<?php
include('enTete.php');
?>
<div class="background" style="background-image:url('public/images/fighterPilot.jpg');">
    <div class="bodyContent">
        <div class="textContent">
            <p>Fighting Aircraft Pilot<br>Aptitude Test</p>
        </div>
        <?php
        if (isset($_SESSION['logged']) == true) {
            if (isset($_SESSION['gestion'])) {
                echo "<div class=\"corps\">
                    <a href=\"?lan=fr&action=mainAdmin\">Gestion</a>
                </div>";
            } else {
                echo "<div class=\"corps\">
                    <a href=\"?lan=fr&action=profil\">Profil</a>
                </div>";
            }
        } else {
            echo "<div class=\"corps\">
                    <a href=\"?lan=fr&action=connect\">Se connecter</a>
                </div>";
        }
        ?>
        <div class="corps">
            <?php
            if (isset($_SESSION['logged']) == true) {
                echo "<a href=\"?lan=fr&action=test\">Passer le Test</a>";
            } else {
                echo "<a href=\"?lan=fr&action=documentation\">Documentation</a>";
            }

            if (isset($_SESSION['logged']) == true) {
                echo "<a href=\"?lan=fr&action=statistique\">Statistiques</a>";
            } else {
                echo "<a href=\"?lan=fr&action=faq\">Questions Fréquentes</a>";
            }
            ?>
        </div>
    </div>
</div>
<?php
include('piedPage.php');
?>
</body>
</html>
