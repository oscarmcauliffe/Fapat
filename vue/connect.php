<!DOCTYPE html>
<html>
    <head>
        <title>
        Connect (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="public/css/styleMain.css">
        <link rel="stylesheet"
              href="public/css/styleConnect.css">
    </head>
    <body>
        <?php
        include ('enTete.php');
        ?>
        <div class="backgroundAll">
            <div class="backgroundLeft">
            </div>

            <div class="backgroundRight">
                <div class="loginBox">
                    <form action="index.php?action=logIn" method="post">
                        <p>Se Connecter</p>
                        <div class="loginWrite">
                            <input id ="name" type="text" name="username" required>
                            <label for="name" class="label-name">
                                <span class="content-name">Identifiant</span>
                            </label>
                        </div>

                        <div class="loginWrite">
                            <input id = password type="password" name="password" required>
                            <label for="password" class="label-name">
                                <span class="content-name">Mot de Passe</span>
                            </label>
                        </div>
                        <button name="submit" type="submit" class="logButton" value ="Se Connecter">Se connecter</button>
                        <label><b><?=errorLogIn()?></b></label>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
