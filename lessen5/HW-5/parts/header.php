<?php
    require_once 'db/db.php';

    $result = mysqli_query($link, "SELECT * FROM cats");
    $cats = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marshroom</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Главная</a></li>
        <? foreach($cats as $cat) { ?>
        <li><a href="#"><? echo $cat['rus_name']?></a></li>
        <? } ?>
    </ul>
</nav>
<hr>