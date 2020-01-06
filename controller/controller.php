<?php
//Le PHP

require('model/model.php');

function main(){
    require('vue/main.php');
}

function connect(){
    require('vue/connect.php');
}

function profil(){
    require('vue/profil.php');
}

function mainAdmin(){
    require('vue/mainAdmin.php');
}

function ajoutCandidat(){
    require('vue/ajoutCandidat.php');
}

function nousContacter(){
    require('vue/nousContacter.php');
}

function aPropos(){
    require('vue/aPropos.php');
}

function conditions(){
    require('vue/conditions.php');
}

function faq(){
    require('vue/faq.php');
}

function documentation(){
    require('vue/documentation.php');
}

function logOut(){
    unset($_SESSION['logged']);
    header('Location: index.php?action=main');
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
        header('Location: index.php?action=main');
    }
}

function accessIfAdmin(){
    if(isset($_SESSION['gestion'])==false){
        header('Location: index.php?action=main');
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
    header('Location: index.php?action=nousContacter');
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