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
        FAQ Admin (En)
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
    
        <h1>Edit FAQ</h1>
        <div class ="background">
            <div class="contenu">
                <div class="modifFaq">
                    <h2>Add new FAQ :</h2>
            
                    <form action="index.php?action=addFaq" method="post">
                        <label for="question">Question :</label>
                        <input type="text" name="question"> <br> <br>
                        
                        <label for="reponse">Answer :</label>
                        <textarea name="reponse"></textarea> <br/>
        
                    <input type="submit" name="nouvelle_faq" value="Add to FAQ">
                
                    </form>
                
                </div>

    
                <h2>FAQ Preview :</h2>
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
                    <a id="sup" class="bouton_" href="?lan=en&action=suppFaq&id=<?= $faq['id']?>" onclick=" return confirm('Are you sure you want to delete this FAQ ?');">Delete FAQ</a>
                    <a id="modif" class="bouton_" href="?lan=en&action=modifierFaq&id=<?= $faq['id']?>">Edit FAQ </a>
                </div> <br>
       
                <?php endforeach ?>
            </div>
        </div>
        <?php
        include('piedPage.php');
        ?>
    </body>
</html>