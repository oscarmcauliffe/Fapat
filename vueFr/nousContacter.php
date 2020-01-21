<!DOCTYPE html>
<html>
    <head>
        <title>
        Contact (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="public/css/styleMain.css">
        <link rel="stylesheet"
              href="public/css/styleContact.css">
    </head>
    <body>
        <?php
        include ('enTete.php');
        ?>

        <div class="backgroundAll">
            <div class="backgroundContact">
                <div class="contactBox">
                    <form action="?lan=fr&action=mailContact" method="post" class="contactform">
                        <div style="padding: 15px">
                            <label for="name">
                                <b>Nom</b>
                            </label>
                            <input type="text" placeholder="Votre Nom" name="name" required>

                            <label for="email">
                                <b>E-Mail</b>
                            </label>
                            <input type="email" placeholder="Votre Email" name="email" required>

                            <label for="subject" style="width:100%;">
                                <b>Sujet</b>
                            </label>
                            <input type="text" placeholder="Sujet" name="subject" required>

                            <label for="message">
                                <b>Message</b>
                            </label>
                            <textarea placeholder="Message à envoyer" name="message" rows="5" cols="50%" required style="resize: none"></textarea>

                            <button type="submit" class="send">
                                Envoyer
                            </button>
                        </div>
                        <label><b><?=validMail()?></b></label>
                    </form>
                </div>
            </div>
        </div>

        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
