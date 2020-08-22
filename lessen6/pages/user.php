<?php
$link = mysqli_connect('127.0.0.1', 'root', 'root', 'gbphp'); //подключение к базе данных

// запрос к базе данных

$res = mysqli_query($link, 'SELECT * FROM users');




$html = '<h1>Информация о пользователи</h1>';
$row = mysqli_fetch_assoc($res);
    $html .= <<<php
    <p>Login: {$row['login']}</p> <br>
php;

echo $html;
