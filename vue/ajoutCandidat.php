<!DOCTYPE html>
<html>
<head>
    <title>
        Test FAPAT (Fr)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="public/css/styleMain.css">
    <link rel="stylesheet"
          href="public/css/styleConnect.css">
    <link rel="stylesheet"
          href="public/css/styleAjoutCandidat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
</head>
<body>
    <?php
    include ('enTete.php');
    ?>

    <div class="backgroundAjout">
        <div class="backgroundLeftAjout">
            <table class="tableCandidat" align="center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>email</th>
                            <th>admin</th>
                            <th>dateNaissance</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                    $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");
                    $req = $db->query("select * from users");
                    $req->execute();

                    while($row = $req->fetch()) : ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['nom']; ?></td>
                            <td><?php echo $row['prenom']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['admin']; ?></td>
                            <td><?php echo $row['dateNaissance']; ?></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>

        <div class="backgroundRightAjout">
            
            <div class="loginBoxAJ">
                <h2>Ajouter un candidat :</h2>
                <form action="index.php?action=addUser" method="post" style="width: 90%">
                        <div class="loginWriteAJ">
                            <input id="nom" type="text" name="nom" required>
                            <label class="label-nameAJ">
                                <span class="content-nameAJ">Nom</span>
                            </label>
                        </div>

                        <div class="loginWriteAJ">
                            <input id="prenom" type="text" name="prenom" required>
                            <label class="label-nameAJ">
                                <span class="content-nameAJ">Prénom</span>
                            </label>
                        </div>

                        <div class="loginWriteAJ">
                            <input id="email" type="text" name="email" required>
                            <label class="label-nameAJ">
                                <span class="content-nameAJ">E-mail</span>
                            </label>
                        </div>

                        <div class="loginWriteAJ">
                            <label style="color: #adadad">
                                Date de Naissance
                            </label>
                            <input id="dateDeNaissance" type="date" name="dateDeNaissance" required>
                        </div>

                        <button name="submit" type="submit" class="logButtonAJ">
                            Ajouter candidat
                        </button>
                </form>
            </div>
        </div>
    </div>

    <?php
    include ('piedPage.php');
    ?>
</body>
</html>
