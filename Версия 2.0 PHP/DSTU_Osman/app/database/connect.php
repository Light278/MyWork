<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'DSTU_Osman';
$db_user = 'root';
$db_pass = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;charset=$charset", //Параметры для подключения
        $db_user, $db_pass, $options
    );
}catch (PDOException $i){
    die("Ошибка подключения к базе данных");
}
