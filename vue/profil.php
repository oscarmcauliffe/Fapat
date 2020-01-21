<!DOCTYPE html>
<html>
    <head>
        <title>
        Test FAPAT (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="public/css/styleMain.css">
         <link rel="stylesheet"
              href="public/css/styleProfile.css">
    </head>
    <body>
        <?php
        include ('enTete.php');
        ?>

        <div class="backgroundAll">
            <div class="backgroundProfil">
                <div class="profilBox">

                    <div class="profilText" style="height: 90%; flex-basis: 80%; padding: 3%">
                        <h1>Profil</h1>
                        <p><b>Nom : </b><?=$_SESSION['nom']?></p>
                        <p><b>Prénom : </b><?=$_SESSION['prenom']?></p>
                        <p><b>E-mail : </b><?=$_SESSION['email']?></p>
                        <p><b>Date de Naissance : </b><?=$_SESSION['dateNaissance']?></p>
                        <br>
                        <p><b>Pseudonyme : </b><?=$_SESSION['logged']?></p>
                        <p><b>Changer de Mot de Passe :</b></p>

                        <form action="index.php?action=nouveauMdp" method="post">
                            <div class="mdpInput">
                                <input id="oldPassword" type="password" name="oldPassword" required>
                                <label for="oldPassword" class="mdpLabel">
                                    <span class="content-name">Mot de Passe actuel</span>
                                </label>
                            </div>
                            <div class="mdpInput">
                                <input id="newPassword" type="password" name="newPassword" required>
                                <label for="newPassword" class="mdpLabel">
                                    <span class="content-name">Nouveau Mot de Passe</span>
                                </label>
                            </div>
                            <div class="mdpInput">
                                <input id="newPassword2" type="password" name="newPassword2" required>
                                <label for="newPassword2" class="mdpLabel">
                                    <span class="content-name">Confirmer</span>
                                </label>
                            </div>
                            <button name="submit" type="submit" class="mdpButton">Changer</button>
                            <label><b><?=errorPassChange()?></b></label>
                        </form>
                    </div>
                </div>
            </div>
          </div>

        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
