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
            header('Location: ?lan=fr&action=mainAdmin');
            exit;
        }
        else{
            header('Location: ?lan=fr&action=main');
            exit;
        }
    }
    else{
        $_SESSION['logfailed'] = true;
        header('Location: ?lan=fr&action=connect');
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
            header('Location: ?lan=fr&action=profil');
            exit;
        }
        else{
            $_SESSION['changeFailed'] = 1;
            header('Location: ?lan=fr&action=profil');
            exit;
        }
    }
    else{
        $_SESSION['changeFailed'] = 2;
        header('Location: ?lan=fr&action=profil');
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

    header('Location: ?lan=fr&action=ajoutCandidat');

    $to = $email;
    $subject = "Connexion FAPAT";
    $message = "Bonjour $nom,\nVoici vos identifiants pour le site FAPAT :\n$username\n$password";
    mail($to, $subject, $message);
}

function showFAQ(){
$objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root','');

$pdoStat=$objPdo->prepare('SELECT * FROM faq');

$executeIsOk=$pdoStat->execute();

$faqs=$pdoStat->fetchAll();

}

function addFaq($question,$reponse){

$objPdo = new PDO('mysql:host=localhost;dbname=fapat','root','');
$pdoStat = $objPdo->prepare('INSERT INTO faq VALUES (NULL, :question, :reponse)');


$pdoStat->bindValue(':question',$_POST['question'],PDO::PARAM_STR);
$pdoStat->bindValue(':reponse',$_POST['reponse'],PDO::PARAM_STR);

$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = 'faq ajoutée';
} else {
    $message = 'echec';
}

header('Location: ?lan=fr&action=faqAdmin');
}

function suppFaq(){
    $objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root','');

    $pdoStat=$objPdo->prepare('DELETE FROM faq WHERE id=:num LIMIT 1');

    $pdoStat->bindValue(':num', $_GET['id'], PDO::PARAM_INT);


    $executeIsOk = $pdoStat-> execute();

    header('Location: ?lan=fr&action=faqAdmin');
}

function saveModifFaq(){

    $objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root','');

    $pdoStat = $objPdo->prepare('UPDATE faq set question=:question, reponse=:reponse WHERE id=:num LIMIT 1');

    $pdoStat->bindValue(':num',$_POST['idf'], PDO::PARAM_INT);
    $pdoStat->bindValue(':question',$_POST['question'], PDO::PARAM_STR);
    $pdoStat->bindValue(':reponse',$_POST['reponse'], PDO::PARAM_STR);

    $executeIsOk = $pdoStat->execute();

    header('Location: ?lan=fr&action=faqAdmin');
}

function suppUser(){
    $objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root',''); 

    $pdoStat=$objPdo->prepare('DELETE FROM users WHERE id=:num LIMIT 1');

    $pdoStat->bindValue(':num', $_GET['id'], PDO::PARAM_INT);


    $executeIsOk = $pdoStat-> execute();

    header('Location: ?lan=fr&action=modifCandidat');
    
}

function saveModifUser(){
    $objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root',''); 
            
    $pdoStat = $objPdo->prepare('UPDATE users set username=:username, nom=:nom, prenom=:prenom, email=:email, dateNaissance=:dateNaissance WHERE id=:num LIMIT 1');
            
    $pdoStat->bindValue(':num',$_POST['id'], PDO::PARAM_INT);
    $pdoStat->bindValue(':username',$_POST['username'], PDO::PARAM_STR);
    $pdoStat->bindValue(':nom',$_POST['nom'], PDO::PARAM_STR);
    $pdoStat->bindValue(':prenom',$_POST['prenom'], PDO::PARAM_STR);
    $pdoStat->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
    $pdoStat->bindValue(':dateNaissance',$_POST['dateNaissance'], PDO::PARAM_STR);
            
    $executeIsOk = $pdoStat->execute();
    
    header('Location: ?lan=fr&action=modifCandidat');
    
}

function dataStat(){
    $conn = new mysqli("localhost","root","","fapat");
    $statSql = "SELECT score FROM stats ORDER BY score ASC";
    $resultStat = $conn->query($statSql);
    $data = array();
    foreach ($resultStat as $row) {
        $data[] = $row;
    }

    $resultStat->close();
    $conn->close();

    print json_encode($data);
}
?>
