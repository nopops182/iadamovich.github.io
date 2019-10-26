<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/src/php/source/function.php'); 
    include($_SERVER['DOCUMENT_ROOT'].'/src/php/source/db.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
    <title>
        <?= "Необычная Москва - {$title}"; ?>
    </title>
</head>
<body>
    <header>
        <div class="wrapper header-inner">
            <div class="header-inner-logo">
                <div class="header-inner-logo-img"></div>
                <div class="header-inner-logo-text"></div>
            </div>
            <nav class="header-inner-navigation">
                <a href="/index.php">Главная</a>
                <a href="/trips.php">Наши услуги</a>
                <a href="#">О компании</a>
                <a href="/contacts.php">Контакты</a>
                <a href="#">Отзывы</a>
            </nav>
            <div class="burger">
                <div class="burger-inner"></div>
            </div>
        </div>
    </header>