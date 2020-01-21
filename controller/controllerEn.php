<?php
//Le PHP

require('model/modelEn.php');

function main()
{
    require('vueEn/main.php');
}

function connect()
{
    require('vueEn/connect.php');
}

function profil()
{
    require('vueEn/profil.php');
}

function mainAdmin()
{
    require('vueEn/mainAdmin.php');
}

function ajoutCandidat()
{
    require('vueEn/ajoutCandidat.php');
}

function modifCandidat()
{
    require('vueEn/modifCandidat.php');
}

function modifierUser()
{
    require('vueEn/modifierUser.php');
}

function nousContacter()
{
    require('vueEn/nousContacter.php');
}

function quiSommesNous()
{
    require('vueEn/quiSommesNous.php');
}

function conditions()
{
    require('vueEn/conditions.php');
}

function faq()
{
    require('vueEn/faq.php');
}

function documentation()
{
    require('vueEn/documentation.php');
}

function statistique()
{
    require('vueEn/statistique.php');
}

function faqAdmin()
{
    require('vueEn/faqAdmin.php');
}

function modifierFaq()
{
    require('vueEn/modifierFaq.php');
}

function test()
{
    require('vueEn/test.php');
}

function logOut()
{
    unset($_SESSION['logged']);
    if (isset($_SESSION['gestion'])) {
        unset($_SESSION['gestion']);
    }
    header('Location: ?lan=en&action=main');
    exit;
}

function randomPassword()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

function accessIfLogged()
{
    if (isset($_SESSION['logged']) == false) {
        header('Location: ?lan=en&action=main');
    }
}

function accessIfAdmin()
{
    if (isset($_SESSION['gestion']) == false) {
        header('Location: ?lan=en&action=main');
    }
}

function mailContact($subject, $name, $message, $email)
{
    $to = 'capsens2019@gmail.com';
    $messageFinal = "From : " . $email . "\nNom : $name\n$message";

    if (mail($to, $subject, $messageFinal)) {
        $_SESSION['mail'] = 'success';
        addContact($subject, $name, $message, $email);
    } else {
        $_SESSION['mail'] = 'failed';
    }
    header('Location: ?lan=en&action=nousContacter');
    exit;
}

function errorLogIn()
{
    if (isset($_SESSION['logfailed']) && $_SESSION['logfailed'] == true) {
        $error = "Incorrect Login";
        unset($_SESSION['logfailed']);
        return $error;
    }
}

function errorPassChange()
{
    if (isset($_SESSION['changeFailed']) && $_SESSION['changeFailed'] == 1) {
        $error = "The current password is incorrect!";
        unset($_SESSION['changeFailed']);
        return $error;
    } elseif (isset($_SESSION['changeFailed']) && $_SESSION['changeFailed'] == 2) {
        $error = "The new passwords don't match!";
        unset($_SESSION['changeFailed']);
        return $error;
    }
}

function validMail()
{
    if (isset($_SESSION['mail'])) {
        if ($_SESSION['mail'] == 'failed') {
            $error = "Email not sent.";
            unset($_SESSION["mail"]);
            return $error;
        } elseif ($_SESSION['mail'] == 'success') {
            $sucess = "Email sent.";
            unset($_SESSION["mail"]);
            return $sucess;
        }
    }
}

?>