<?php

$res = mysqli_query($link, 'SELECT * FROM users');  //выборка всех users в массив

$html = '<h1>Пользователи</h1>';        //на этой странице заголовок
while ($row = mysqli_fetch_assoc($res)) {
    $html .= <<<php
    Login: <a href="?page=3&id={$row['id']}">{$row['login']}</a> <br>
php;
}
echo $html;