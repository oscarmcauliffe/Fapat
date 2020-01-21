<!DOCTYPE html>
<html>
<head>
    <title>
        Modif Candidat (Fr)
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="public/css/styleMain.css">
    <link rel="stylesheet"
          href="public/css/styleAjoutCandidat.css">
    <link rel="stylesheet"
          href="public/css/styleModifCandidat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
</head>
<body>
    <?php
    include ('enTete.php');
    ?>
    <div class="background">
        <div class="contenu">
            
            <h1>Modifier le profil d'un utilisateur</h1>
            
            <?php
            $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");
                    
            $user = $db->query('SELECT * FROM users');
            
            
            ?>
            
            
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
                            <th>Modifier un profil</th>
                        </tr>
                    </thead>
                <tbody>
                    
                    <?php


                    while($row = $user->fetch()) : ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['nom']; ?></td>
                            <td><?php echo $row['prenom']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['admin']; ?></td>
                            <td><?php echo $row['dateNaissance']; ?></td>
                            <td> <a id="modif" class="bouton" href="?lan=fr&action=modifierUser&id=<?= $row['id']?>" >Modifier <br> </a>
                                
                                <a id="sup" class="bouton" href="?lan=fr&action=suppUser&id=<?= $row['id']?>" onclick=" return confirm('Etes vous sur de vouloir supprimer cet utilisateur ?');">Supprimer</a> </td>
                        </tr>

                    <?php endwhile ?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    
    <?php
    include ('piedPage.php');
    ?>
</body>
</html>