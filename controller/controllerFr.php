<?php
//Le PHP

require('model/modelFr.php');

function main(){
    require('vueFr/main.php');
}
function connect(){
    require('vueFr/connect.php');
}

function profil(){
    require('vueFr/profil.php');
}

function mainAdmin(){
    require('vueFr/mainAdmin.php');
}

function modifCandidat(){
    require('vueFr/modifCandidat.php');
}

function ajoutCandidat(){
    require('vueFr/ajoutCandidat.php');
}


function modifierUser(){
    require('vueFr/modifierUser.php');
}


function nousContacter(){
    require('vueFr/nousContacter.php');
}

function quiSommesNous(){
    require('vueFr/quiSommesNous.php');
}

function conditions(){
    require('vueFr/conditions.php');
}

function faq(){
    require('vueFr/faq.php');
}

function documentation(){
    require('vueFr/documentation.php');
}

function statistique(){
  require('vueFr/statistique.php');
}

function faqAdmin(){
    require ('vueFr/faqAdmin.php');
}

function modifierFaq(){
    require('vueFr/modifierFaq.php');
}

function logOut(){
    unset($_SESSION['logged']);
    if(isset($_SESSION['gestion'])){
        unset($_SESSION['gestion']);
    }
    header('Location: ?lan=fr&action=main');
    exit;
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

function accessIfLogged(){
    if(isset($_SESSION['logged'])==false){
        header('Location: ?lan=fr&action=main');
    }
}

function accessIfAdmin(){
    if(isset($_SESSION['gestion'])==false){
        header('Location: ?lan=fr&action=main');
    }
}

function mailContact($subject,$name,$message,$email){
    $to = 'capsens2019@gmail.com';
    $messageFinal = "From : ".$email."\nNom : $name\n$message";

    if(mail($to, $subject, $messageFinal)){
        $_SESSION['mail'] = 'success';
        addContact($subject,$name,$message,$email);
    }
    else{
        $_SESSION['mail'] = 'failed';
    }
    header('Location: ?lan=fr&action=nousContacter');
    exit;
}

function errorLogIn(){
    if (isset($_SESSION['logfailed']) && $_SESSION['logfailed']==true)
    {
        $error = "Identifiants incorrects";
        unset($_SESSION['logfailed']);
        return $error;
    }
}

function errorPassChange(){
    if (isset($_SESSION['changeFailed']) && $_SESSION['changeFailed']==1) {
        $error = "Le mot de passe actuel est incorrect!";
        unset($_SESSION['changeFailed']);
        return $error;
    }
    elseif (isset($_SESSION['changeFailed']) && $_SESSION['changeFailed']==2){
        $error = "Les nouveaux mots de passe ne sont pas les mêmes!";
        unset($_SESSION['changeFailed']);
        return $error;
    }
}

function validMail(){
    if (isset($_SESSION['mail'])){
        if ($_SESSION['mail']=='failed'){
            $error = "Email non envoyé.";
            unset($_SESSION["mail"]);
            return $error;
        }
        elseif ($_SESSION['mail']=='success'){
            $sucess = "Email envoyé";
            unset($_SESSION["mail"]);
            return $sucess;
        }
    }
}




?>
