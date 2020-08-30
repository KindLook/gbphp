<?php
session_start();
$link = mysqli_connect('127.0.0.1', 'root', 'root', 'gbphp');
var_dump(password_hash('123', PASSWORD_DEFAULT));

const SOL  = 'skmpkmp pom';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['password']) && empty($_POST['login'])) {
        header('Location: /less7/teory/');
        exit;
    }
    $password =md5($_POST['password'] . SOL);
    $login =$_POST['login'];

    $sql = "SELECT login, password FROM users WHERE login = '{$login}'";

    $result = mysqli_query($link, $sql);
    $userData = mysqli_fetch_assoc($result);


    if(!empty($userData) && password_verify($password, $userData['password'])) {
        $_SESSION['user'] = 1;
    }
    header('Location: /less7/teory/index.php');
    exit;
}
if (array_key_exists('exit', $_GET)) {
    session_destroy();
    header('Location: /less7/teory/');
    exit;
}
var_dump($_SESSION);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?PHP if(empty($_SESSION['user'])) :?>
<form method="post">
    <p><input type="text" name="login" /></p>
    <p><input type="password" name="password" /></p>
    <p><input type="checkbox" name="rememberme" /></p>
    <p><input type="submit" value="Войти" /></p>
</form>
<?php else :?>
 Вы авторизованы
    <a href="?exit">Выход</a>
<?php endif; ?>
</body>
</html>