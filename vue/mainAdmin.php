<!DOCTYPE html>
<html>
<head>
    <title>
        Test FAPAT (Fr)
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <link rel="stylesheet"
          href="public/css/StyleMain.css">
    <link rel="stylesheet"
          href="public/css/StyleMainAdmin.css">
</head>
<body>
    <?php
    include ('enTete.php');
    ?>

        <div class="container">
            <div class="box">
                <div class="imgBox">
                    <img src="public/images/Test2.jpg">
                    <div class="details">
                        <div class="content">
                            <a class="boutonOption" href="index.php?action=#">Modifier le test</a>
                            <a class="boutonOption"  href="index.php?action=#">Consulter le test</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBox">
                    <img src="public/images/documentation1.jpg">
                     <div class="details">
                        <div class="content">
                            <a class="boutonOption"  href="index.php?action=faqAdmin">Modifier la FAQ</a>
                            <a class="boutonOption"  href="index.php?action=#">Modifier les statistiques</a>
                        </div>
                     </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBox">
                    <img src="public/images/Candidats1.jpg">
                     <div class="details">
                         <div class="content">
                             <a class="boutonOption" href="index.php?action=ajoutCandidat">Ajouter un profil</a>
                             <a class="boutonOption" href="index.php?action=#">Modifier un profil</a>
                        </div>
                     </div>
                </div>
            </div>
        </div>

    <?php
    include('piedPage.php');
    ?>
</body>
</html>

