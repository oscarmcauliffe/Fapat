<?php
$objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8', 'root', '');

$pdoStat = $objPdo->prepare('SELECT * FROM users WHERE id=:num');

$pdoStat->bindValue(':num', $_GET['id'], PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$userModif = $pdoStat->fetch();

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Edit Profile (En)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="public/css/styleMain.css">
    <link rel="stylesheet"
          href="public/css/styleFaq.css">


</head>

<body>
<?php
include('enTete.php');
?>


<div class="background">

    <div class="contenu">
        <div class="modifFaq">
            <h2>Edit Profile</h2>

            <form action="?lan=en&action=saveModifUser" method="post">
                <input type="hidden" name="id" value="<?= $userModif['id'] ?>">

                <p>
                    <label for="question">Username : </label><br><br>
                    <input type="text" name="username" value="<?= $userModif['username'] ?>"></p>

                <p><label for="reponse">First Name :</label> <br><br>
                    <input type="text" name="nom" value="<?= $userModif['nom'] ?>"></p>

                <p><label for="reponse">Last Name :</label> <br><br>
                    <input type="text" name="prenom" value="<?= $userModif['prenom'] ?>"></p>

                <p><label for="reponse">E-mail :</label><br><br>
                    <input type="text" name="email" value="<?= $userModif['email'] ?>"></p>

                <p><label for="reponse">Date of Birth :</label><br><br>
                    <input type="text" name="dateNaissance" value="<?= $userModif['dateNaissance'] ?>"></p>

                <input type="submit" id="saveModif" name="saveModif" value="Apply changes"
                       onclick=" return confirm('Are you sure you want to apply changes ?');">

            </form>

        </div>
    </div>
</div>


<?php
include('piedPage.php');
?>
</body>
</html>
 