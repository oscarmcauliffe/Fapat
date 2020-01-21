<!DOCTYPE html>
<html>
    <head>
        <title>
        Connect (En)
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
                    <form action="?lan=en&action=logIn" method="post">
                        <div class="title"><h1>Log In</h1></div>
                       <div class="entreUtilisateur">
                        <div class="loginWrite">
                            <input id ="name" type="text" name="username" required>
                            <label for="name" class="label-name">
                                <span class="content-name">Username</span>
                            </label>
                        </div>

                        <div class="loginWrite">
                            <input id = password type="password" name="password" required>
                            <label for="password" class="label-name">
                                <span class="content-name">Password</span>
                            </label>
                        </div>
                       </div>
                        <div class="boxBoutton">
                        <div class="buttonBox">
                          <button name="submit" type="submit" class="logButton" value ="Se Connecter">Log In</button>
                          <label><b><?=errorLogIn()?></b></label>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
