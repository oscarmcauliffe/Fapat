<!DOCTYPE html>
<html>
<head>
    <title>
        Test FAPAT (Fr)
    </title>
    <meta charset="UTF-8">
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
                            <ul>
                                <li>
                                    <a class="boutonOption" href="index.php?action=#">Consulter le test</a>
                                </li>
                                <li>
                                    <a class="boutonOption"  href="index.php?action=#">Modifier le test</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="public/images/documentation1.jpg">
                     <div class="details">
                        <div class="content">
                            <ul>
                                <li>
                                    <a class="boutonOption"  href="index.php?action=#">Modifier la documentation</a>
                                </li>
                                <li>
                                    <a class="boutonOption"  href="index.php?action=#">Modifier les statistiques</a>
                                </li>
                            </ul>
                        </div>
                     </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="public/images/Candidats1.jpg">
                     <div class="details">
                         <div class="content">
                             <ul>
                                 <li>
                                     <a   href="index.php?action=#">Ajouter un profil</a>
                                 </li>
                                 <li>
                                     <a   href="index.php?action=#">Modifier un profil</a>
                                 </li>
                             </ul>
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

