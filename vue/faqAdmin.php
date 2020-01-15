<!DOCTYPE html>
<html>
<head>
    <title>
        FAQ (fr)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="public/css/styleMain.css">

</head>
    
    <body >
        <?php
        include ('enTete.php');
        ?>
    
        <h1>Modifications de la FAQ </h1>
        
        <div class=container> 
    
            <?php
                showFAQ();
            ?>
        
            <h2>Ajouter une nouvelle faq</h2>
            
            
            <form action="index.php?action=addFaq" method="post">   
            Question : <input type="text" name="question"> <br/>
            Réponse : <textarea name="reponse"></textarea> <br/>
        
            <input type="submit" name="nouvelle_faq" value="Ajouter la faq">
                
            </form>
            

    
        </div>
    
    
        <?php
        include('piedPage.php');
        ?>
    </body>
    
    
</html>