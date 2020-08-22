<?php
//var_dump($_GET);
var_dump($_POST);

?>

<h1>Логин: <?= $_POST['user']['login']?></h1>
<a href="?user[name]=Саша&user[login]=sasha">Саша</a>   
<a href="?user[name]=Юля&user[login]=julia">Юля</a>
<a href="?user[name]=Миша&user[login]=misha">Миша</a>
<a href="?">Очистить</a>                                
<br><br>

<form method="post" >
         <input type="hidden" name="_metod" value="PUT">
        <input name="user[name]" placeholder="name" value="<?= $_POST['user']['login']?>">
        <input name="user[login]" placeholder="login" value="<?= $_POST['user']['login']?>">
        <input type="checkbox" name="test[]" value="1" <?= hasChecked(1)?>>
        <input type="checkbox" name="test[]" value="2" <?= hasChecked(2)?>>
        <input type="checkbox" name="test[]" value="3" <?= hasChecked(3)?>>
        <input type="submit">
</form>

<?
function hasChecked($id)
{
    if(empty($_POST['test'])){
        return '';
    }

    if(in_array($id, $_POST['test'])){
        return 'checked';
    }

    return '';

}
?>