<!DOCTYPE html>
<html>
<head>
    <title>
        Test FAPAT (En)
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
            <p>Aptitude Test</p>
        </div>
        <?php
        if (isset($_SESSION['logged'])==true){
            if(isset($_SESSION['gestion'])){
                echo"<div class=\"corps\">
                    <a href=\"?lan=en&action=mainAdmin\">Admin</a>
                </div>";
            }
            else{echo"<div class=\"corps\">
                    <a href=\"?lan=en&action=profil\">Profile</a>
                </div>";}
        }
        else{
            echo"<div class=\"corps\">
                    <a href=\"?lan=en&action=connect\">Log In</a>
                </div>";
        }
        ?>
        <div class="corps">
            <?php
            if (isset($_SESSION['logged']) == true) {
                echo "<a href=\"?lan=en&action=test\">Pass the Test</a>";
            } else {
                echo "<a href=\"?lan=en&action=documentation\">Documentation</a>";
            }

            if (isset($_SESSION['logged']) == true) {
                echo "<a href=\"?lan=en&action=statistique\">Statistics</a>";
            } else {
                echo "<a href=\"?lan=en&action=faq\">FAQ</a>";
            }
            ?>
        </div>
    </div>
</div>
<?php
include ('piedPage.php');
?>
</body>
</html>
