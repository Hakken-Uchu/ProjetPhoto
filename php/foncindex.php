<?php
$mysqlConnection = new PDO('mysql:host=localhost;dbname=mailing;charset=utf8', 'root', 'lol');


$sqlQuery = 'SELECT * FROM `mailing`';
$mailStatement = $mysqlConnection->prepare($sqlQuery);
$mailStatement->execute();
$mail = $mailStatement->fetchAll();



if (isset($_POST['mail'])) {
    $sqlQuery = 'INSERT INTO mailing(mail) VALUES (:mail)';
    $insertRecipe = $mysqlConnection->prepare($sqlQuery);
    $insertRecipe->execute([
        'mail' => $_POST['mail'],
    ]);
    $message_mailing_success = "Votre inscription a bien été effectuer, merci!";
    echo "<script type='text/javascript'>alert('$message_mailing_success');
    document.location.href = '/';
</script>";
}else {
    $message_mailing_fail = "Un problème est survenue veuiller réssayer plus tard";
    echo "<script type='text/javascript'>alert('$message_mailing_fail');
</script>";
}


?>