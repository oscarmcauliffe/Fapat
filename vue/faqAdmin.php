<?php
$objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root','');

$pdoStat=$objPdo->prepare('SELECT * FROM faq');

$executeIsOk=$pdoStat->execute();

$faqs=$pdoStat->fetchAll();


?>


<!DOCTYPE html>
<html>
<head>
    <title>
        FAQ (fr)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="public/css/styleMain.css">
    <link rel="stylesheet"
          href="public/css/styleFaq.css">
    <script src="public/javascript/jquery-3.4.1.min.js"></script>
    <script src="public/javascript/deroule.js"></script>
</head>

    <body >
        <?php
        include ('enTete.php');
        ?>

        <h1>Modifications de la FAQ </h1>

        <div class ="background">

            <div class="contenu">
                <div class="modifFaq">
                    <h2>Ajouter une nouvelle question</h2>

                    <form action="index.php?action=addFaq" method="post">
                        <label for="question">Question :</label>
                        <input type="text" name="question"> <br> <br>

                        <label for="reponse">Réponse :</label>
                        <textarea name="reponse"></textarea> <br/>

                    <input type="submit" name="nouvelle_faq" value="Ajouter la question">

                    </form>

                </div>


                <h2>Aperçu de la FAQ :</h2>
                <?php foreach ($faqs as $faq):  ?>
                <div class="section">
                   <h3><?= $faq['question'] ?></h3>
                     <div class="reponse">
                         <div class="reponse-inner">
                             <p><?= $faq['reponse'] ?> </p>

                         </div>
                    </div> <!--faq=<?//= $faq['id']?>-->
                </div>


                <div class="modif">
                    <a id="sup" class="bouton_" href="index.php?action=suppFaq&id=<?= $faq['id']?>" onclick=" return confirm('Etes vous sur de vouloir supprimer cette FAQ ?');">Supprimer la question</a>


                    <a id="modif" class="bouton_" href="index.php?action=modifierFaq&id=<?= $faq['id']?>" >Modifier la question </a>

                </div> <br>

                <?php endforeach ?>


            </div>

        </div>


        <?php
        include('piedPage.php');
        ?>
    </body>


</html>
