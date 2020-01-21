<?php
//Le routeur

session_start();

if (isset($_GET['lan'])) {
    switch ($_GET['lan']) {
        case 'en':
            require('indexEn.php');
            break;
        case 'fr':
        default:
            require('indexFr.php');
            break;
    }
}
else{require('indexFr.php');}
?>