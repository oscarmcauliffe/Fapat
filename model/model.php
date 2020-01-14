<?php
//Tout ce qui est SQL

function logIn($username,$password){
    unset($_SESSION['logfailed']);
    $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");

    $rep = $db->query("SELECT username,password,admin,nom,prenom,email,dateNaissance FROM users WHERE username = '".$username."'");
    $data = $rep->fetch();

    if(password_verify($password, $data['password'])){
        $_SESSION['logged']=$username;
        $_SESSION['nom']=$data['nom'];
        $_SESSION['prenom']=$data['prenom'];
        $_SESSION['email']=$data['email'];
        $_SESSION['dateNaissance']=$data['dateNaissance'];

        if($data['admin']==1){
            $_SESSION['gestion']=1;
            header('Location: index.php?action=mainAdmin');
            exit;
        }
        else{
            header('Location: index.php?action=profil');
            exit;
        }
    }
    else{
        $_SESSION['logfailed'] = true;
        header('Location: index.php?action=connect');
        exit;
    }
}

function newPassword($oldPassword,$newPassword,$newPassword2){
    if($newPassword == $newPassword2){
        $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");
        $rep = $db->query("SELECT username,password,admin,nom,prenom,email,dateNaissance FROM users WHERE username = '".$_SESSION['logged']."'");
        $data = $rep->fetch();

        if (password_verify($oldPassword,$data['password'])){
            $newPasswordHashed = password_hash($newPassword, PASSWORD_DEFAULT);
            $rep2 = $db->query("UPDATE users SET password = '".$newPasswordHashed."' WHERE users.username = '".$_SESSION['logged']."'");
            header('Location: index.php?action=profil');
            exit;
        }
        else{
            $_SESSION['changeFailed'] = 1;
            header('Location: index.php?action=profil');
            exit;
        }
    }
    else{
        $_SESSION['changeFailed'] = 2;
        header('Location: index.php?action=profil');
        exit;
    }
}

function addContact($subject,$name,$message,$email){
    $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");
    $req = $db->query("insert into contact (email,nom,sujet,message) values ('".$email."', '".$name."', '".$subject."', '".$message."')");
}

function addUser($nom,$prenom,$email,$date){
    $nom = str_replace(' ', '', $nom);
    $nom = str_replace('-', '', $nom);

    $prenom = str_replace(' ', '', $prenom);
    $prenom = str_replace('-', '', $prenom);

    $username = strtolower(substr($prenom,0,1).$nom);

    $password = randomPassword();
    $passwordhashed = password_hash($password, PASSWORD_DEFAULT);

    $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");
    $req = $db->query("insert into users (username,password,nom,prenom,email,dateNaissance) values ('".$username."', '".$passwordhashed."', '".$nom."', '".$prenom."', '".$email."', '".$date."')");

    header('Location: index.php?action=ajoutCandidat');

    $to = $email;
    $subject = "Connexion FAPAT";
    $message = "Bonjour $nom,\nVoici vos identifiants pour le site FAPAT :\n$username\n$password";
    mail($to, $subject, $message);
}

function showFAQ(){
    $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");
    
    $rep = $db->query("SELECT * FROM faq");
        
    while($row = $rep->fetch()) :
            //$id = $row['id'];
            $question = $row['question'];
            echo $question;
            $reponse = $row['reponse'];
            echo $reponse;
    endwhile;
     
}

?>