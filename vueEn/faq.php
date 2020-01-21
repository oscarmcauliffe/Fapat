<?php

$objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root','');

$pdoStat=$objPdo->prepare('SELECT * FROM faqEn');

$executeIsOk=$pdoStat->execute();

$faqs=$pdoStat->fetchAll();


?>

<!DOCTYPE html>
<html>
<head>
    <title>
        FAQ (En)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="public/css/styleMain.css">
    <link rel="stylesheet"
    <link rel="stylesheet"
          href="public/css/styleFaq.css">
    <script src="public/javascript/jquery-3.4.1.min.js"></script>
    <script src="public/javascript/deroule.js"></script>
</head>
<body >
    <?php
    include ('enTete.php');
    ?>
    <div class ="background">
        <div class="contenu">
            <h1>Frequently Asked Questions</h1>
             <?php foreach ($faqs as $faq):  ?>
                <div class="section">
                   <h3><?= $faq['question'] ?></h3>
                     <div class="reponse">
                         <div class="reponse-inner">
                             <p><?= $faq['reponse'] ?> </p>
                         </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
    <?php
    include('piedPage.php');
    ?>
</body>
</html>
