<!DOCTYPE html>
<html>
<head>
    <title>
        Admin (Fr)
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <link rel="stylesheet"
          href="public/css/styleMain.css">
    <link rel="stylesheet"
          href="public/css/styleMainAdmin.css">
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
                            <a class="boutonOption" href="?lan=fr&action=#">Modifier le test</a>
                            <a class="boutonOption"  href="?lan=fr&action=#">Consulter le test</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBox">
                    <img src="public/images/documentation1.jpg">
                     <div class="details">
                        <div class="content">
                            <a class="boutonOption"  href="?lan=fr&action=faqAdmin">Modifier la FAQ</a>

                            <a class="boutonOption"  href="?lan=fr&action=statistique">Consulter les statistiques</a>

                        </div>
                     </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBox">
                    <img src="public/images/Candidats1.jpg">
                     <div class="details">
                         <div class="content">
                             <a class="boutonOption" href="?lan=fr&action=ajoutCandidat">Ajouter un profil</a>
                             <a class="boutonOption" href="?lan=fr&action=modifCandidat">Modifier un profil</a>
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

