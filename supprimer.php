<?php
//session_start();
//echo $_GET['id'];

$objPdo = new PDO('mysql:host=localhost;dbname=fapat;charset=utf8','root',''); 

$pdoStat=$objPdo->prepare('DELETE FROM faq WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_GET['id'], PDO::PARAM_INT);


$executeIsOk = $pdoStat-> execute();

header('Location: index.php?action=faqAdmin');

?>