<?php
var_dump($_GET);
?>

<h1>Логин: <?= $_GET['user']['login']?></h1>
<a href="?user[name]=Саша&user[login]=sasha">Саша</a>
<a href="?user[name]=Юля&user[login]=julia">Юля</a>
<a href="?user[name]=Миша&user[login]=misha">Миша</a>
<a href="?">Очистить</a>
<br><br>
<form >
    <input name="user[name]" placeholder="name">
    <input name="user[login]" placeholder="login">
    <input type="checkbox" name="test[]" value="1">
    <input type="checkbox" name="test[]" value="2">
    <input type="checkbox" name="test[]" value="3">
    <input type="submit">
</form>