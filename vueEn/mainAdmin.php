<!DOCTYPE html>
<html>
<head>
    <title>
        Admin (En)
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
                            <a class="boutonOption" href="?lan=en&action=#">Edit Test</a>
                            <a class="boutonOption" href="?lan=en&action=#">View Test</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBox">
                    <img src="public/images/documentation1.jpg">
                     <div class="details">
                        <div class="content">
                            <a class="boutonOption" href="?lan=en&action=faqAdmin">Edit FAQ</a>
                            <a class="boutonOption" href="?lan=en&action=statistique">View Statistics</a>
                        </div>
                     </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBox">
                    <img src="public/images/Candidats1.jpg">
                     <div class="details">
                         <div class="content">
                             <a class="boutonOption" href="?lan=en&action=ajoutCandidat">Add Profile</a>
                             <a class="boutonOption" href="?lan=en&action=modifCandidat">Edit Profiles</a>
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

