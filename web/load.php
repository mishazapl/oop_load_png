<?php
session_start();
error_reporting(E_ALL);       // устанавливает уровень отслеживаемых ошибок интерпретатором php
ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере
require __DIR__ . '/../vendor/autoload.php';

$file = new liw\app\File();
$user = new liw\app\user();

@$aunt = $user->checkLogin($_SESSION['login'],$_SESSION['password']);


if (isset($_POST['submit'])) {
    $checked = $file->validPng($_FILES['file']['type']);
    $file->downloadFile($checked);
}

if (isset($_POST['check'])) {
    $login = trim(htmlspecialchars($_POST['login']));
    $password  = trim(htmlspecialchars($_POST['password']));
    $user->aunt($login,$password);
}

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
<?php if ($aunt === true):?>
<form enctype="multipart/form-data" action="<?$_SERVER['SCRIPT_NAME']?>" method="post">
    <input type="file" name="file">
    <input type="submit" name="submit" value="Загрузить изображение">
</form>
<?php else: ?>
    <h1>Войдите чтобы загрузить файлы!</h1>
<form action="<?$_SERVER['SCRIPT_NAME']?>" method="post">
    <br><label><input name="login"></label>
    <br><label><input name="password"></label>
    <br>
    <br>
    <input type="submit" name="check">
</form>
<?php endif; ?>
</body>
</html>
