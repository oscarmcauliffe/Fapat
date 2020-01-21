<?php
$objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root',''); 

$pdoStat = $objPdo -> prepare('SELECT * FROM faq WHERE id=:num');

$pdoStat->bindValue(':num', $_GET['id'], PDO::PARAM_INT);

$executeIsOk = $pdoStat-> execute();

$faqModif = $pdoStat->fetch();

?>

<!DOCTYPE html>
<html>
    <head>
    <title>
        Edit FAQ (En)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" 
          href="public/css/styleMain.css">
    <link rel="stylesheet"
          href="public/css/styleFaq.css">
          
         
    </head>
    
    <body>
        <?php
        include ('enTete.php');
        ?> 

        
        <div class ="background">

            <div class="contenu">
                <div class="modifFaq">
                    <h2>Modifier la FAQ</h2>
            
                    <form action="?lan=en&action=saveModifFaq" method="post">
                        <input type="hidden" name="idf" value="<?= $faqModif['id'] ?>">
                        
                        <label for="question">Question : </label>
                        <input type="text" name="question" value="<?= $faqModif['question'] ?>"> <br> <br>
                        
                        <label for="reponse">Answer :</label>
                        <textarea name="reponse" ><?= $faqModif['reponse'] ?></textarea> <br/>
        
                    <input type="submit" id="saveModif" name="saveModif" value="Apply changes" onclick=" return confirm('Are you sure you want to apply changes ?');">
                
                    </form>
                
                </div>
            </div>
        </div>

        
      <?php
        include('piedPage.php');
        ?>
    </body>
</html>
 