<?php

$res = mysqli_query($link, 'SELECT * FROM users WHERE id = ' . getId());

$html = '<h1>Информация о пользователи</h1>';
$row = mysqli_fetch_assoc($res);
    $html .= <<<php
    <p>Login: {$row['login']}</p> <br>
php;

echo $html;
