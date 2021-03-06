<?php
//indexFr

require('controller/controllerFr.php');

if (isset($_GET['action'])){
    switch ($_GET['action']) {
        case 'main':
            main();
            break;
        case 'connect':
            connect();
            break;
        case 'logIn':
            logIn(htmlentities($_POST['username']),htmlentities($_POST['password']));
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
        case 'conditions':
            conditions();
            break;
        case 'faq':
            faq();
            break;
        case 'faqAdmin':
            accessIfLogged();
            accessIfAdmin();
            faqAdmin();
            break;
        case 'documentation':
            documentation();
            break;
        case 'statistique':
            statistique();
            break;
        case 'nouveauMdp':
            newPassword(htmlentities($_POST['oldPassword']),htmlentities($_POST['newPassword']),htmlentities($_POST['newPassword2']));
            break;
        case 'mailContact':
            mailContact(htmlentities($_POST['subject']),htmlentities($_POST['name']),htmlentities($_POST['message']),htmlentities($_POST['email']));
            break;
        case 'ajoutCandidat':
            accessIfLogged();
            accessIfAdmin();
            ajoutCandidat();
            break;

        case 'modifCandidat':
            accessIfLogged();
            accessIfAdmin();
            modifCandidat();
            break;

        case 'suppUser':
            accessIfLogged();
            accessIfAdmin();
            suppUser();
            break;

        case 'modifierUser':
            accessIfLogged();
            accessIfAdmin();
            modifierUser();
            break;

        case 'saveModifUser':
            accessIfLogged();
            accessIfAdmin();
            saveModifUser();

        case 'addUser':
            addUser(htmlentities($_POST['nom']),htmlentities($_POST['prenom']),htmlentities($_POST['email']),htmlentities($_POST['dateDeNaissance']));
        case 'quiSommesNous':
            quiSommesNous();
            break;
        case 'addFaq':
            addFaq(htmlentities($_POST['question']),htmlentities($_POST['reponse']));
            break;

        case 'suppFaq' :
            accessIfLogged();
            accessIfAdmin();
            suppFaq();
            break;

        case 'saveModifFaq' :
            accessIfLogged();
            accessIfAdmin();
            saveModifFaq();
            break;

        case 'modifierFaq' :
            accessIfLogged();
            accessIfAdmin();
            modifierFaq();
            break;
        case 'test':
            test();
            break;

        default:
            main();
    }
}
else{main();}