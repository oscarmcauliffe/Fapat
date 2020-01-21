<?php
$objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root',''); 

$pdoStat = $objPdo -> prepare('SELECT * FROM users WHERE id=:num');

$pdoStat->bindValue(':num', $_GET['id'], PDO::PARAM_INT);

$executeIsOk = $pdoStat-> execute();

$userModif = $pdoStat->fetch();

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
                    <h2>Modifier le profil</h2>
            
                    <form action="index.php?action=saveModifUser" method="post">
                        <input type="hidden" name="id" value="<?= $userModif['id'] ?>">
                        
                        <p>
                        <label for="question">Username : </label><br><br>
                        <input type="text" name="username" value="<?= $userModif['username'] ?>"> </p>
                        
                        <p><label for="reponse">Nom :</label> <br><br>
                        <input type="text" name="nom" value="<?= $userModif['nom'] ?>"></p>
                        
                       <p> <label for="reponse">Prénom :</label> <br><br>
                        <input type="text" name="prenom" value="<?= $userModif['prenom'] ?>"> </p>
                        
                       <p> <label for="reponse">Adresse mail :</label><br><br>
                        <input type="text" name="email" value="<?= $userModif['email'] ?>"> </p>
                        
                        <p><label for="reponse">Date de naissance :</label><br><br>
                        <input type="text" name="dateNaissance" value="<?= $userModif['dateNaissance'] ?>"></p>
        
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
 