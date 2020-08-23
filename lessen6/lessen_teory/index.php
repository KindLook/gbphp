<?php

require_once  __DIR__ . '/config/lib.php';   //нам нужно вызвать только один раз поэтому require_once
$pages = include __DIR__ . '/config/pages.php'; //в переменную положили  конфигурац файл(там номера страниц)


$pageName = getPage($pages);  //получили страницу и положили в переменную

ob_start();                               //буферизация вызова
include __DIR__ . '/pages/' . $pageName;
$content = ob_get_clean();

$html = file_get_contents('main.html');   //в переменную кладем соединение с html файлом
echo str_replace('{{content}}', $content, $html);  //заменяем в html на content из буфера и вставляем в html



