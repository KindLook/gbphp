<?php
define('DIR_IMG', 'img');                          //существование (название для папки img)
$images_tmp = scandir(__DIR__ . '/' . DIR_IMG); //переменная =превращение в массив(абсолютный путь/название папки с фото)

$tmp = '';                                       //пустую переменную
foreach ($images_tmp as $value) {                  //перебираем папку с фото
    if(strlen($value) > 2) {                        //кол-во байтов(в названии файла >2)
        $tmp .= "<a href=" . DIR_IMG . '/' . $value . " target='_blank'>   
                    <img src=" . DIR_IMG . '/' . $value . ">               
                    </a>";
    }                                                   //то в переменную записывается ссылка -адрес картинки 
}                                                       //в новое окно браузера

$temp = file_get_contents('template.tpl');
$temp = str_replace('{{CODE}}', $tmp, $temp);
echo $temp;