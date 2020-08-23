<?php
$link = mysqli_connect('127.0.0.1', 'root', 'root', 'gbphp'); //подключение к базе данных

function getPage($pages)
{
    $pageNumber = 1;
    if(!empty((int)$_GET['page'])) {       //не пустая переменная с именем page
        $pageNumber = (int)$_GET['page'];  //смотрим что прилетело и есть ли такой у нас
    }

    if(empty($pages[$pageNumber])) {   //если пустая то номер 1
        $pageNumber = 1;
    }
    return $pages[$pageNumber];   //возвращаем значение номер массива pages
}

function getId() {          //если не пустой ID в _GET то будет возвращать ID иначе 0
    if (!empty((int)$_GET['id'])) {
        return((int)$_GET['id']);
    }
    return 0;
}