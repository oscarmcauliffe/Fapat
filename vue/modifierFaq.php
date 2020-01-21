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
        Modification de la FAQ (fr)
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
            
                    <form action="index.php?action=saveModifFaq" method="post">
                        <input type="hidden" name="idf" value="<?= $faqModif['id'] ?>">
                        
                        <label for="question">Question : </label>
                        <input type="text" name="question" value="<?= $faqModif['question'] ?>"> <br> <br>
                        
                        <label for="reponse">Réponse :</label>
                        <textarea name="reponse" ><?= $faqModif['reponse'] ?></textarea> <br/>
        
                    <input type="submit" id="saveModif" name="saveModif" value="Enregistrer les modifications" onclick=" return confirm('Etes vous sur de vouloir enrigistrer des modifications ?');">
                
                    </form>
                
                </div>
            </div>
        </div>

        
      <?php
        include('piedPage.php');
        ?>
    </body>
</html>
 