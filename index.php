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
            logIn(htmlentitie($_POST['username']),htmlentities($_POST['password']));
            break;
        case 'logOut':
            logOut();
            break;
        case 'profil':
            accessIfLogged();
            profil();
            break;
        case 'mainAdmin':
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
            newPassword(htmlentities($_POST['oldPassword']),htmlentities($_POST['newPassword']),htmlentities($_POST['newPassword2']));
            break;
        case 'mailContact':
            mailContact(htmlentities($_POST['subject']),htmlentities($_POST['name']),htmlentities($_POST['message']),htmlentities($_POST['email']));
            break;
        case 'ajoutCandidat':
            accessIfAdmin();
            ajoutCandidat();
            break;
        case 'addUser':
            addUser(htmlentities($_POST['nom']),htmlentities($_POST['prenom']),htmlentities($_POST['email']),htmlentities($_POST['dateDeNaissance']));
        case 'quiSommesNous':
            quiSommesNous();
            break;
        default:
            main();
    }
}
else{main();}
?>
