<?php
$mysqlConnection = new PDO('mysql:host=localhost;dbname=capyfoot;charset=utf8', 'root', 'lol');
$db = new PDO(
    'mysql:host=localhost;dbname=capyfoot;charset=utf8',
    'root',
    'lol',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);
try {

} catch (PDOException $e) {
    die($e->getMessage());
}



?>