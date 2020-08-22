<?php

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