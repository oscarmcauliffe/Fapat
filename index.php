<?php
//Le routeur

session_start();

require ('controller/controller.php');

if (isset($_GET['action'])){
    switch ($_GET['action']) {
        case 'main':
            main();
            break;
        case 'connect':
            connect();
            break;
        case 'logIn':
            logIn($_POST['username'],$_POST['password']);
            break;
        case 'logOut':
            logOut();
            break;
        case 'profil':
            accessIfLogged();
            profil();
            break;
        case 'mainAdmin':
            accessIfLogged();
            accessIfAdmin();
            mainAdmin();
            break;
        case 'nousContacter':
            nousContacter();
            break;
        case 'aPropos':
            aPropos();
            break;
        case 'conditions':
            conditions();
            break;
        case 'faq':
            faq();
            break;
        case 'faqAdmin':
            faqAdmin();
            break;
        case 'documentation':
            documentation();
            break;
        case 'nouveauMdp':
            newPassword($_POST['oldPassword'],$_POST['newPassword'],$_POST['newPassword2']);
            break;
        case 'mailContact':
            mailContact($_POST['subject'],$_POST['name'],$_POST['message'],$_POST['email']);
            break;
        case 'ajoutCandidat':
            accessIfAdmin();
            ajoutCandidat();
            break;
        case 'addUser':
            addUser($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['dateDeNaissance']);
            break;
        case 'quiSommesNous':
            quiSommesNous();
            break;
        default:
            main();
    }
}
else{main();}
?>