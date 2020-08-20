<?php
$link = mysqli_connect('127.0.0.1', 'root', 'root', 'gbphp');   //подключились к БД
delete($link);
addData($link);


$result = mysqli_query($link, "SELECT * FROM users");   //сделали запрос
//$users = mysqli_fetch_all($result, MYSQLI_ASSOC);       //вывели данные пользователей - ассоциативные массивы - назв колонки и значение
//var_dump($users);



//$result = mysqli_query($link, "SELECT * FROM users WHERE id IN (1,3,5)");


while ($row = mysqli_fetch_assoc($result)) {
    echo <<<php
        <h1>Name: {$row['name']}</h1>               
        <p>id: {$row['id']}</p>                         
        <a href="?del={$row['id']}">Удалить</a>;    
        <hr>
php;
//заголовок - Имя
//id
//создали ссылку на удаление - текст\=id пользователя/при нажатии записываетс яв массив 'del' _GET.
}

function delete($link){             //функция на удаление пользователя
    if (empty((int)$_GET['del'])) {  //если массив 'del' в _Get пустой то ничего
        return;
    }
    $id = (int)$_GET['del'];          //иначе в $id = число из _GET
    $sql = "DELETE FROM `users` WHERE id = {$id}";  //переменная на удаление id
    mysqli_query($link, $sql);          //отправляем запрос с переменной удаления
    header('Location: ?');        //оюновляем страницу с нулевым запросом в адресной строке
    exit;                               //выход из функции
}

function addData($link)
{                                        //функция на удаление пользователя
    if (empty($_GET['addData'])) {  //если массив 'del' в _Get пустой то ничего
        return;
    }
    $login = 'userAdd';
    $password = '123userAdd';
    $name = '123userAdd';

    $sql = "INSERT INTO `users` (`login`, `password`, `name`) 
            VALUES ( '$login', '$password', '$name')";

    mysqli_query($link, $sql);          //отправляем запрос с переменной удаления
    header('Location: ?');        //оюновляем страницу с нулевым запросом в адресной строке
    exit;                               //выход из функции
}