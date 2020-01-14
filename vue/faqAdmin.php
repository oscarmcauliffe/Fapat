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
            
            <form action="faqAdmin.php" method="post">
            Question : <input type="text" name="question"> <br/>
                Réponse : <textarea name="reponse"></textarea> <br/>
        
            <input type="submit" name="nouvelle_faq" value="Ajouter la faq">
                
            </form>
            
            <?php 
            $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");
            if($_POST['nouvelle_faq']){
                $question = strip_tags(mysql_real_escape_string($_POST['question']));
                $reponse = strip_tags(mysql_real_escape_string($_POST['reponse']));
                $sql = "INSERT INTO faq (question, reponse) VALUE('".$question."', '".$reponse."')";
                $res = mysql_query($sql);
                hearder("Location: faqAdmin.php");
                exit();
            }
            
            ?>
    
        </div>
    
    
        <?php
        include('piedPage.php');
        ?>
    </body>
    
    
</html>