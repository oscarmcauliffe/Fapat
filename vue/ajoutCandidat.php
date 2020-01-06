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
</head>
<body>
    <?php
    include ('enTete.php');
    ?>

    <div style="display: flex;">
    <div style="width: 20%; display: block; margin-left: 10%; margin-right: auto;">
    <table>
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

    <div style="width: 20%; display: block; margin-left: auto; margin-right: 10%;">
        <form action="index.php?action=addUser" method="post" class="formulaire">
            <div>
                <label>
                    <b>Nom</b>
                </label>
                <input id="nom" type="text" placeholder="Nom" name="nom" required>

                <label>Prénom</label>
                <input id="prenom" type="text" placeholder="Prénom" name="prenom" required>

                <label>E-mail</label>
                <input id="email" type="text" placeholder="Adresse e-mail" name="email" required>

                <label>Date de Naissance</label>
                <input id="dateDeNaissance" type="date" name="dateDeNaissance">

                <button name="submit" type="submit" class="connect">
                    Ajouter candidat
                </button>
            </div>
        </form>
    </div>
    </div>

    <?php
    include ('piedPage.php');
    ?>
</body>
</html>
