<!DOCTYPE html>
<html>
    <head>
        <title>
        Profile (En)
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
                        <h1>Profile</h1>
                        <p><b>First Name : </b><?=$_SESSION['nom']?></p>
                        <p><b>Last Name : </b><?=$_SESSION['prenom']?></p>
                        <p><b>E-mail : </b><?=$_SESSION['email']?></p>
                        <p><b>Date of Birth : </b><?=$_SESSION['dateNaissance']?></p>
                        <br>
                        <p><b>Username : </b><?=$_SESSION['logged']?></p>
                        <p><b>Change Password :</b></p>

                        <form action="?lan=en&action=nouveauMdp" method="post">
                            <div class="mdpInput">
                                <input id="oldPassword" type="password" name="oldPassword" required>
                                <label for="oldPassword" class="mdpLabel">
                                    <span class="content-name">Current Password</span>
                                </label>
                            </div>
                            <div class="mdpInput">
                                <input id="newPassword" type="password" name="newPassword" required>
                                <label for="newPassword" class="mdpLabel">
                                    <span class="content-name">New Password</span>
                                </label>
                            </div>
                            <div class="mdpInput">
                                <input id="newPassword2" type="password" name="newPassword2" required>
                                <label for="newPassword2" class="mdpLabel">
                                    <span class="content-name">Confirm</span>
                                </label>
                            </div>
                            <button name="submit" type="submit" class="mdpButton">Change</button>
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
